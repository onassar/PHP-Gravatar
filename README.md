PHP-Gravatar
===
Honestly, not much to say about this class. It was something I needed sometime
ago to make my comments a little more robust. [Gravatar](http://gravatar.com/)
adds context to email addresses that you may have from comments on your site,
and my little static class simply wraps their basic API for a more organized
execution.

### Sample Image Output

    // dependency
    require_once APP . '/vendors/PHP-Gravatar/Gravatar.class.php';
    
    // grab path for associated email; output image
    $email = 'onassar@gmail.com';
    $image = Gravatar::getImagePath($email);
    echo '<img src="' . ($image) . '" />';
    exit(0);
