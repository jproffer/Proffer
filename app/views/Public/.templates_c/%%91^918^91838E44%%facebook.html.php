<?php /* Smarty version 2.6.25-dev, created on 2011-04-19 20:00:20
         compiled from App/facebook.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'print_r', 'App/facebook.html', 72, false),)), $this); ?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
	<?php echo '
    <style>
      body {
        font-family: \'Lucida Grande\', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
	'; ?>

  </head>
  <body>
    <!--
      We use the JS SDK to provide a richer user experience. For more info,
      look here: http://github.com/facebook/connect-js
    -->
    <div id="fb-root"></div>
	<?php echo '
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId   : \'<?php echo $facebook->getAppId(); ?>\',
          session : <?php echo json_encode($session); ?>, // don\'t refetch the session when PHP already has it
          status  : true, // check login status
          cookie  : true, // enable cookies to allow the server to access the session
          xfbml   : true // parse XFBML
        });

        // whenever the user logs in, we refresh the page
        FB.Event.subscribe(\'auth.login\', function() {
          window.location.reload();
        });
      };

      (function() {
        var e = document.createElement(\'script\');
        e.src = document.location.protocol + \'//connect.facebook.net/en_US/all.js\';
        e.async = true;
        document.getElementById(\'fb-root\').appendChild(e);
      }());
    </script>
	'; ?>


    <h1><a href="example.php">php-sdk</a></h1>
	<?php if ($this->_tpl_vars['me']): ?>
    <a href="<?php echo $this->_tpl_vars['logoutUrl']; ?>
">
      <img src="http://static.ak.fbcdn.net/rsrc.php/z2Y31/hash/cxrz4k7j.gif">
    </a>
    <?php else: ?>
    <div>
      Using JavaScript &amp; XFBML: <fb:login-button></fb:login-button>
    </div>
    <div>
      Without using JavaScript &amp; XFBML:
      <a href="<?php echo $this->_tpl_vars['loginUrl']; ?>
">
        <img src="http://static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif">
      </a>
    </div>
    <?php endif; ?>

    <h3>Session</h3>
	
	<?php if ($this->_tpl_vars['me']): ?>
		<pre><?php echo print_r($this->_tpl_vars['ession']); ?>
</pre>

		<h3>You</h3>
		<img src="https://graph.facebook.com/<?php echo '<?php'; ?>
 echo $uid; <?php echo '?>'; ?>
/picture">
		<?php echo $this->_tpl_vars['me']['name']; ?>


		<h3>Your User Object</h3>
		<pre><?php echo print_r($this->_tpl_vars['me']); ?>
</pre>
    <?php else: ?>
	
		<strong><em>You are not Connected.</em></strong>
    <?php endif; ?>

  </body>
</html>