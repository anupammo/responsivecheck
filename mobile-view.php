<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mobile View</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
    .mobile-view {
        width: 332px;
        height: 600px;
        margin: 15px auto;
        border: #dadada solid 10px;
        border-top-width: 40px;
        border-bottom-width: 40px;
        border-radius: 15px;
        display: block;
        overflow: hidden;
        box-shadow: #868686 0px 0px 20px;
    }
    .mobile-view embed {
        width: 330px;
        height: 540px;
    }
    .tab-view {
        width: 802px;
        height: 550px;
        margin: 15px auto;
        border: #dadada solid 10px;
        border-top-width: 50px;
        border-bottom-width: 50px;
        border-radius: 15px;
        display: block;
        overflow: hidden;
        box-shadow: #868686 0px 0px 20px;
    }
    .tab-view embed {
        width: 800px;
        height: 450px;
    }
    .nav>li {
        display: inline-block;
        width: fit-content;
    }
    .nav.navtab {
        margin: 0 auto;
        width: fit-content;
    }
    form.form-inline {
        margin: 15px auto;
        width: fit-content;
    }
    .navtab li a {
        background: #fff;
        color: #000000;
        border: #fff solid 1px;
        border-radius: 3px;
    }
    .navtab li a:hover {
        background: #fff;
        color: #2196F3;
        border: #2196F3 solid 1px;
        border-radius: 3px;
    }
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12"></div>
          <div class="col-sm-4 col-xs-12">
            <form class="form-inline">
              <div class="form-group">
                <input type="url" class="form-control" placeholder="http://google.com" id="urlchk">
              </div>
              <button type="button" class="btn btn-success" onclick="urlEmbedcheck()">CHECK</button>
            </form>
          </div>
          <div class="col-sm-4 col-xs-12"></div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div>
            <!-- Nav tabs -->
            <ul class="nav navtab" role="tablist">
              <li role="presentation" class="text-uppercase"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mobile View</a></li>
              <li role="presentation" class="text-uppercase"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Tab View</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="col-xs-12">
                  <div class="mobile-view">
                    <embed id="moblink" src="https://anupammondal.in" />
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="profile">
                <div class="col-xs-12">
                  <div class="tab-view">
                    <embed id="tablink" src="https://anupammondal.in" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script>
    function urlEmbedcheck() {
      var urlweb = document.getElementById("urlchk");
      document.getElementById("moblink").src = document.getElementById("urlchk").value;
    }
    </script>
  </body>
</html>
