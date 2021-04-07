<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

{{--     <script>
        ClassicEditor
        .create( document.querySelector( '#anamnesis' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                ]
            }
        } )
        .catch( error => {
            console.log( error );
        } );
    </script> --}}

<script>
    ClassicEditor
    .create( document.querySelector( '#anamnesis' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'numberedList' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
</script>

<script>
    ClassicEditor
    .create( document.querySelector( '#observations' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'numberedList' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
</script>

<script>
    ClassicEditor
    .create( document.querySelector( '#problem_list' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'numberedList' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
</script>

<script>
    ClassicEditor
    .create( document.querySelector( '#master_list' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'numberedList' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
</script>

<script>
    ClassicEditor
    .create( document.querySelector( '#treatment_plan' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'numberedList' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
</script>

<script>
    ClassicEditor
    .create( document.querySelector( '#intructions_to_owner' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'numberedList' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
</script>
