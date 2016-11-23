<!DOCTYPE html>
<html lang="en">
<head>
  <title>Voter Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="styles.css" type="text/css"></link>
  <script src="jquery.js" type="text/javascript"></script>

  <?php 
    session_start();

    ini_set('session.cache_limiter','private');
    session_cache_limiter(false);

    if (!isset($_SESSION['ses_fname'])){
        header("Location: index.php");
        //header("Location: http://www.google.com");
        exit;
      }

    $_SESSION['fromExit'] = 1;



    
    if (isset($_SESSION['ses_cit']))        { unset($_SESSION['ses_cit']);      }
    if (isset($_SESSION['ses_kan_res']))    { unset($_SESSION['ses_kan_res']);  }
    if (isset($_SESSION['ses_fel']))        { unset($_SESSION['ses_fel']);      }
    if (isset($_SESSION['ses_age']))        { unset($_SESSION['ses_age']);      }

    if (isset($_SESSION['ses_n_suf']))      { unset($_SESSION['ses_n_suf']);    }
    if (isset($_SESSION['ses_fname']))      { unset($_SESSION['ses_fname']);    }
    if (isset($_SESSION['ses_mname']))      { unset($_SESSION['ses_mname']);    }
    if (isset($_SESSION['ses_lname']))      { unset($_SESSION['ses_lname']);    }
    if (isset($_SESSION['ses_dob']))        { unset($_SESSION['ses_dob']);      }

    if (isset($_SESSION['ses_dl_num']))     { unset($_SESSION['ses_dl_num']);   }
    if (isset($_SESSION['ses_dl_iss']))     { unset($_SESSION['ses_dl_iss']);   }
    if (isset($_SESSION['ses_dl_exp']))     { unset($_SESSION['ses_dl_exp']);   }
    if (isset($_SESSION['ses_dl_add']))     { unset($_SESSION['ses_dl_add']);   }

    if (isset($_SESSION['ses_curr_add']))   { unset($_SESSION['ses_curr_add']); }
    if (isset($_SESSION['ses_tele']))       { unset($_SESSION['ses_tele']);     }
    if (isset($_SESSION['ses_email']))      { unset($_SESSION['ses_email']);    }

    if (isset($_SESSION['ses_vID']))        { unset($_SESSION['ses_vID']);       }
    if (isset($_SESSION['district']))       { unset($_SESSION['district']);      }
    
    for($k = 0; $k < 100; $k++){
           $j = strval($k);
           $j = 'wi_r'.$j;
           $t = strval($k);
           $t = "r".$t;
           
           //echo $j;
            if(isset($_POST[$j]))
            {
              unset($_POST[$j]);
            }
            if(isset($_POST[$t]))
            {
              unset($_POST[$t]);
            }
            if(isset($_SESSION[$j]))
            {
              unset($_SESSION[$j]);
            }
            if(isset($_SESSION[$t]))
            {
              unset($_SESSION[$t]);
            }
    }

    
  ?>

</head>

<body>
<div class="container">

  <div class="jumbotron text-center">
  <h1>Welcome!</h1>
  <p>Would you like to vote or register?</p>
  </div>
  <div class="padding_main">
    <div class="entry_choice"> 
      <a href="index.php"><button class="mButton" style="vertical-align:middle"><span>Home</span></button></a>

    </div>
  </div>

</div>
</body>

</html>