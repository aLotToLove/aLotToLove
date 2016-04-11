<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/cover.css">
        <link rel="icon"type="image/png" href="/img/favicon.ico">
        <title>A Lot To Love</title>
    </head>

    <body class="testimg" background="/img/lot.jpg">
         <nav>
          <ul id="navigation">
            <li class="active"><a href="/">Home</a></li>
            <li class="navbar_lists"><a href="/howto">How To Guide</a></li>
            <li class="navbar_lists"><a href="/grants">Grants</a></li>
            <li class="navbar_lists"><a href="/inspiration">Inspiration</a></li>
            <li class="navbar_lists"><a href="/getfunding">Get Funding</a></li>
            <li class="navbar_lists"><a href="/contact">Contact</a></li>
          </ul>
        </nav>

        @yield('content')

          <div class="mastfoot">
            <div class="inner">
              <p><a href="http://getbootstrap.com"></a>, <a href="https://twitter.com/mdo"></a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

<!--modal for getting started navbar-->

 <div class="modal fade" id="forGettingStartedModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Steps to adopt a lot.</h4>
          </div>
          <div class="modal-body modal-lists">
            <ol>
                <li class="modal-lists">Talk to your neighbors, organize a core group of volunteers.</li>
                <br>
                <li class"modal-lists">Fill out the maintenance agreement found on this webpage.</li>
                <br>
                <li class"modal-lists">How will you pay for it?  Check out the grant funding resources.</li>
                <br>
                <li class"modal-lists">Get inspiration for your design- which concept will you go for?  Check out our downloadable templates</li>
                <br>
                <li class"modal-lists">Get started!!!</li>
            </ol>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
     <script src="/js/holder.min.js"></script>
    </body>
</html>
