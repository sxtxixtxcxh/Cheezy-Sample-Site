<h1>Basic Usage</h1>

<p>Easiest thing to do is to take this example project, and start making changes.</p>

<p>Apache must be configured to serve out of the <code>public</code> directory.

<h2>Layouts</h2>

<p>Your main layout should be named <code>default.php</code> inside <code>_layouts/</code>. To change layouts just make a new php file
(for example: <code>new_layout.php</code>) in <code>_layouts</code>. To use it on a page, add <code>&lt;?php $this-&gt;layout = 'new_layout'; ?&gt;</code>
somewhere on the page you want to have use your new layout.</p>

<p>You'll need to add <code>&lt;?php echo $content_for_layout; ?&gt;</code> where ever you want the layout to include the page content.</p>

<h2>Pages</h2>

<p>The default page the framework will try to render is <code>home.php</code> inside <code>_pages</code>. To add a new page to your site,
something like <code>http://example.dev/bio/</code> for example, just make a new file called <code>bio.php</code> and put it inside <code>_pages</code>.</p>

<h2>Partials</h2>

<p>To make a partial, make a new file in <code>_partials</code> (for example: <code>header.php</code>). To include that partial in your page
or layout, add <code>&lt;?php render_partial('header'); ?&gt;</code> wherever you want it to be included.</p>

<h2>Error Pages</h2>

<p>You can customize the error pages by making a new php file called <code>default.php</code> in <code>_errors</code>. Alternatively, you
can serve a specialized page per HTTP error code by putting a file named after the error code number into <code>_errors</code>
(for example: <code>404.php</code>). Check out the <code>vendor/cheezy/_errors/default.php</code> to see the variables you can use in
your error pages.</p>

<h2>Post "Installation"</h2>

<p>You'll need to give read/write permissions (<code>chmod 777</code>) to the <code>tmp</code> directory. This allows the framework to do
a little cacheing to speed up processing time.</p>