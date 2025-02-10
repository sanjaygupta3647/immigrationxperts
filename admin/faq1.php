<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quill Editor Example</title>
    <!-- Include the Quill library -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body>
    <div>
        <h3>Editor 1</h3>
        <div id="editor1" style="height: 300px;"></div>
        <input type="hidden" id="editor1Input" name="editor1Input" />
        
        <h3>Editor 2</h3>
        <div id="editor2" style="height: 300px;"></div>
        <input type="hidden" id="editor2Input" name="editor2Input" />
    </div>

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        // Initialize Quill editors
        const toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            ['link', 'image'],
            ['clean']
        ];

        const editor1 = new Quill('#editor1', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
        });

        const editor2 = new Quill('#editor2', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
        });

        // Save the editor content to hidden inputs on form submission
        const form = document.querySelector('form');
        form.addEventListener('submit', function() {
            document.querySelector('#editor1Input').value = editor1.root.innerHTML;
            document.querySelector('#editor2Input').value = editor2.root.innerHTML;
        });
    </script>
</body>
</html>
