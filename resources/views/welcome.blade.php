<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .wrapper-container {
                padding: 50px;
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
            }
            .form-div, .form-div-2 {
                width: 50%;
                padding: 10px;
            }
            .form-div form input {
                width: 100%;
                border: 1px solid #1a202c;
                height: 35px;
                border-radius: 10px;
                padding: 5px;
            }
            textarea {
                width: 100%;
                border-radius: 10px;
                border: 1px solid #1a202c;
                padding: 5px;
            }
            .btn-select-img {
                cursor: pointer;
            }
            .form-div-2 {
                text-align: center;
            }
            .error, .required {
                color: red;
            }
            @media only screen and (max-width: 640px) {
                .wrapper-container {
                    padding: 0px;
                    display: block;
                    justify-content: space-around;
                    flex-wrap: wrap;
                }
                .form-div, .form-div-2 {
                    width: 100%;
                    padding: 10px;
                }
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="g-gray-100 dark:bg-gray-900 wrapper-container">
            <div class="form-div">
                <h3 style="text-align: center;">Form request</h3>
                <form action="{{ route('request-file') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Text <span class="required">*</span></label>
                        <input name="text" type="text" value="{{ old('text') }}">
                        <span class="error">{{ $errors->first('text') }}</span>
                    </div>
                    <div>
                        <label for="">Email get file <span class="required">*</span></label>
                        <input name="email" type="text" value="{{ old('email') }}">
                        <span class="error">{{ $errors->first('email') }}</span>
                    </div>
                    <div>
                        <label for="">Image buy product <span class="required">*</span></label> 
                        <input type="file" name="image_buy" style="display: none;" class="form-control {{($errors->first('image') != '') ? 'is-invalid' : ''}}" id="upload-image-buy">
                        <input type="button" onclick="updateImage(1)" class="btn-select-img form-control {{($errors->first('image') != '') ? 'is-invalid' : ''}}" value="Click to select image">
                        <div id="image_buy" style="width: 50%; margin-top: 10px;"></div>
                        <span class="error">{{ $errors->first('image_buy') }}</span>
                    </div>
                    <div>
                        <label for="">Image review shop:</label> 
                        <input type="file" name="image_review" style="display: none;" class="form-control {{($errors->first('image') != '') ? 'is-invalid' : ''}}" id="upload-image-review">
                        <input type="button" onclick="updateImage(2)" class="btn-select-img form-control {{($errors->first('image') != '') ? 'is-invalid' : ''}}" value="Click to select image">
                        <div id="image_review" style="width: 50%; margin-top: 10px;"></div>
                        <span class="error">{{ $errors->first('image_review') }}</span>
                    </div>
                    <div>
                        <label for="">Note</label> 
                        <textarea name="note" id="" cols="30" rows="10">{{ old('note') }}</textarea>
                        <span class="error">{{ $errors->first('note') }}</span>
                    </div>
                    <div style="text-align: center;">
                        <button style="height: 50px; width: 200px; background: grey; color: #f7fafc">Submit</button>
                    </div>
                </form>
                <div>
                    <h2>Note</h2>
                    <p>- By default, the animals will be random, but you can customize them in the note field. Example: Dog and Cat</p>
                    <p>- Please allow approximately 24 hours for us to complete it. Once it's done, we will send it to your email.</p>
                    <p>- When you rate the shop 5 stars, you will receive an additional custom-designed image of your choice. Please provide detailed information about the image in the note field so that we can understand your preferences. Thank you!</p>
                </div>
            </div>
            <div class="form-div-2">
                <h3>Image example</h3>
                <img style="width: 80%;" src="" alt="">
            </div>
        </div>
    </body>
    @if(Session::has('success'))
        <script>
        toastr.success("{{ Session::get('success') }}");</script>
    @endif

    @if(Session::has('error'))
        <script>toastr.error("{{ Session::get('error') }}");</script>
    @endif
    <script>
        // Trigger input file image.
        function updateImage(type) {
            if (type == 1) {
                document.getElementById("upload-image-buy").click();
            } else if (type == 2) {
                document.getElementById("upload-image-review").click();
            }
        }

        var input = document.getElementById("upload-image-buy");
        input.addEventListener("change", function(event) {
            let file = event.target.files[0];
            let reader = new FileReader();
            reader.onload = function(e) {
                const content = e.target.result;
                const fileType = file.type;
                if (fileType.startsWith('image/')) {
                    const previewContainer = document.getElementById('image_buy');
                    const image = new Image();
                    image.src = content;
                    image.style.maxWidth = '100%';
                    image.style.maxHeight = '200px';
                    previewContainer.innerHTML = '';
                    previewContainer.appendChild(image);
                } else {
                    console.log('Unsupported file type: ' + fileType);
                }
            };
            
            reader.readAsDataURL(file);
        });

        var input2 = document.getElementById("upload-image-review");
        input2.addEventListener("change", function(event) {
            let file = event.target.files[0];
            let reader = new FileReader();
            reader.onload = function(e) {
                const content = e.target.result;
                const fileType = file.type;
                if (fileType.startsWith('image/')) {
                    const previewContainer = document.getElementById('image_review');
                    const image = new Image();
                    image.src = content;
                    image.style.maxWidth = '100%';
                    image.style.maxHeight = '200px';
                    previewContainer.innerHTML = '';
                    previewContainer.appendChild(image);
                } else {
                    console.log('Unsupported file type: ' + fileType);
                }
            };
            
            reader.readAsDataURL(file);
        });
    </script>
</html>
