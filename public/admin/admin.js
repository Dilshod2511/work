$(document).ready(function () {


    new TomSelect("#select-state",{
        create: false,
        sortField: {
            field: "text",
            direction: "asc"
        }
    });

  $('.nav-treeview .nav-item').on('click',function () {
     // let lacation2=window.location.protocol,+//+,
  });
  $('.delete-btn').click(function () {
   let res=confirm('confirm actions');
   if (!res){
       return false
   }
  })
})

tinymce.init({
    selector: '.editor',
    plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    relative_urls:false,
    // toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    file_picker_callback : elFinderBrowser
    // tinycomments_mode: 'embedded',
    // tinycomments_author: 'Author name',
});
function elFinderBrowser (callback, value, meta) {
    tinymce.activeEditor.windowManager.openUrl({
        title: 'File Manager',
        url: '/elfinder/tinymce5',
        /**
         * On message will be triggered by the child window
         *
         * @param dialogApi
         * @param details
         * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
         */
        onMessage: function (dialogApi, details) {
            if (details.mceAction === 'fileSelected') {
                const file = details.data.file;

                // Make file info
                const info = file.name;

                // Provide file and text for the link dialog
                if (meta.filetype === 'file') {
                    callback(file.url, {text: info, title: info});
                }

                // Provide image and alt text for the image dialog
                if (meta.filetype === 'image') {
                    callback(file.url, {alt: info});
                }

                // Provide alternative source and posted for the media dialog
                if (meta.filetype === 'media') {
                    callback(file.url);
                }

                dialogApi.close();
            }
        }
    });
}
