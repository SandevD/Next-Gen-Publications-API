/*  03.  TinyMCE Initialize */
function makeTinymceTextArea(selectorClass) {
    tinymce.init({
        selector: 'textarea.' + selectorClass,
        height: 300,
        // menubar: true,
        menubar: false,
        branding: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount', 'image',
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
}