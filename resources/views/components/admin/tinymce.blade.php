<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            tinymce.init({
                selector: '.tinymceeditor',
                content_css : "{{ asset('front/css/style.css') }}, {{ asset('front/css/bootstrap.min.css') }}, https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@300;400;500;600;700;800;900&display=swap, https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap",
                branding: false,
                extended_valid_elements: 'span[class|align|style]',
                forced_root_block_attrs: {
                    'class': 'root_block_p',
                },
                element_format: 'html',
                convert_fonts_to_spans: false,
                relative_urls: false,
                remove_script_host: false,
                height: 300,
                browser_spellcheck: true,
                fontsize_formats: "8px 9px 10px 11px 12px 13px 14px 15px 16px 17px 18px 19px 20px 21px 22px 23px 24px 25px 26px 27px 28px 29px 30px 31px 32px 33px 34px 35px 36px 37px 38px 39px 40px",
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code',
                    'insertdatetime table contextmenu paste',
                    'textcolor '
                ],
                toolbar: 'formatselect | fontselect | fontsizeselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | link | image | code ',
                images_upload_handler : function handler(blobInfo, success, failure, progress) {
{
        var valid_extensions = ['png','jpg']
        var ext, extensions;

        extensions = {
          'image/jpeg': 'jpg',
          'image/jpg': 'jpg',
          'image/gif': 'gif',
          'image/png': 'png'
        };
        ext = extensions[blobInfo.blob().type.toLowerCase()] || 'dat';
        //add your extension test here.
        if( valid_extensions.indexOf(ext) == -1){
             failure("Invalid extension");
                return;
        }

        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.open('POST', settings.url);
        xhr.withCredentials = settings.credentials;

        xhr.upload.onprogress = function(e) {
            progress(e.loaded / e.total * 100);
        };

        xhr.onerror = function() {
            failure("Image upload failed due to a XHR Transport error. Code: " + xhr.status);
        };

        xhr.onload = function() {
            var json;

            if (xhr.status != 200) {
                failure("HTTP Error: " + xhr.status);
                return;
            }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != "string") {
                failure("Invalid JSON: " + xhr.responseText);
                return;
            }

            success(pathJoin(settings.basePath, json.location));
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    }
}    
            });
        });
 
    </script>
<style>.mce-floatpanel{z-index: 65547!important;}</style>
