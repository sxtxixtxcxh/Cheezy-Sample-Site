<h1>About</h1>
<p>This is a very, very simple PHP5 framework.</p>

<h2>How it works</h2>

<p>A simplified walkthrough of the whole process might go like this:</p>

<ol>
  <li>Apache receives a request for your site.</li>
  <li>Apache parses the .htaccess file in <code>public</code>.</li>
  <li>The .htaccess tells Apache if it's not an existing file or directory inside <code>public</code>, 
      then send the requst to <code>public/index.php</code>.</li>
  <li><code>index.php</code> includes the framework dispatcher.</li>
  <li>The framework dispatcher tries to boot the framework.</li>
  <li>The framework parses the url to figure out what page is requested.</li>
  <li>If the page does not exist, the framework throws an error, and sends a 404 back to the client.</li>
  <li>The framework tries to render the page and store it for the layout and if it fails, it throws an error.</li>
  <li>The framework then renders the layout, and sticks the rendered page where needed.</li>
  <li>Apache sends it all down to the client.</li>
</ol>

