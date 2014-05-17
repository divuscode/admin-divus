    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>

    <!--[if lte IE 8]>
    <script src="js/respond.min.js"></script>
    <![endif]-->        
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/moris/moris.js"></script>
    <!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css" />
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js"></script>
    <script type="text/javascript" src="js/summernote.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
        $('.page-content').summernote({
            height: 300,   //set editable area's height
            codemirror: { // codemirror options
            theme: 'monokai',
            airMode: true

          }
        });
        $('.page-lead').summernote({
            height: 100,   //set editable area's height
            codemirror: { // codemirror options
            theme: 'monokai',
            airMode: true

          }
        });
        var edit = function() {
          $('.page-content').summernote({focus: true});
          $('.page-lead').summernote({focus: true});
        };
        var save = function() {
          var aHTML = $('.page-content').code(); //save HTML If you need(aHTML: array).
          var aHTML = $('.page-lead').code(); //save HTML If you need(aHTML: array).
        };
    </script>
</body>
</html>