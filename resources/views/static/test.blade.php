<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />
    @vite(['resources/js/app.js'])
</head>

<body data-bs-theme="dark">
    <div class="container-tight py-4">

        <input type="file" />

    </div>





    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>



    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginImageEdit);
        FilePond.create(document.querySelector('input[type="file"]'), {
            imageEditorAfterWriteImage: ({
                    src,
                    dest,
                    imageState
                }) =>
                new Promise((resolve, reject) => {
                    // use Doka Image Editor to process the source image again
                    processImage(src, {
                            imageReader: createDefaultImageReader(),
                            imageWriter: createDefaultImageWriter({
                                targetSize: {
                                    width: 128,
                                    height: 128,
                                    fit: 'cover',
                                },
                            }),
                            imageState,
                        })
                        // we get the thumbnail and add it to the files
                        .then((thumb) =>
                            resolve([{
                                    name: 'input_',
                                    file: src
                                },
                                {
                                    name: 'output_',
                                    file: dest
                                },
                                {
                                    name: 'thumb_',
                                    file: thumb.dest
                                },
                            ])
                        )
                        .catch(reject);
                }),
        });
    </script>
</body>

</html>
