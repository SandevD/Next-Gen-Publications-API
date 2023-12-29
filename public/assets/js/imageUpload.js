function uploadImage(item_type, image_varient, validation) {
    const formData = new FormData();
    const fileField = document.getElementById(item_type + '_' + image_varient + '_image');

    if (validation == null) {
        validation = "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048";
    }

    if (fileField.files[0]) {
        formData.append('image', fileField.files[0]);
        formData.append('type', image_varient);
        formData.append('parent', item_type);
        formData.append('validation', validation);

        fetch('/dashboard/upload', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })

            .then(response => response.json())
            .then(result => {
                document.getElementById(item_type + '_' + image_varient + '_image_hidden').value = result.filepath;
                document.getElementById(item_type + '_' + image_varient + '_image_show').src = result.filepath;
                document.getElementById(item_type + '_' + image_varient + '_image_svg').style.display = "none";
            })
            .catch(error => {
                console.error('Error:', error);
            });

    }

}


function uploadFile(item_type, file_varient, validation) {
    const formData = new FormData();
    const fileField = document.getElementById(item_type + '_' + file_varient + '_file');

    if (validation == null) {
        validation = "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048";
    }

    if (fileField.files[0]) {
        formData.append('file', fileField.files[0]);
        formData.append('type', file_varient);
        formData.append('parent', item_type);
        formData.append('validation', validation);

        fetch('/dashboard/fileupload', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })

            .then(response => response.json())
            .then(result => {
                var fileName = result.filename.split('\\')[5];
                document.getElementById(item_type + '_' + file_varient + '_file_hidden').value = result.filepath;
                document.getElementById(item_type + '_' + file_varient + '_file_show').innerText = result.filename;
                // document.getElementById('book_main_file_show').style.display = "block";
                document.getElementById(item_type + '_' + file_varient + '_file_svg').style.display = "block";
            })
            .catch(error => {
                console.error('Error:', error);
            });

    }

}