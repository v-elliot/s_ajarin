<!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Text Editor
          <small>v 1.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
<div id="test">
        <table align="center">
<tbody>
<tr>
<div valign="top" class="tabel-coding">
<form>
<textarea id="code" name="code">
<style>
html, body { 
  margin: 0;
  padding: 0;
}
table { 
  border: 0;
  width: 100%; 
  height: 100%;
  text-align: center;
}
h1 {
  color: #06f;
  margin: 0 auto;
  text-align: center;
  text-shadow: 1px 2px 3px #000
}
</style>

<table>
  <tr>
    <td>
      <h1>Type Your Code</h1>
    </td>
  </tr>
</table>

<script src="js/jquery.min.js"></script>

<script>

Add script here...

</script>
</textarea>
</form>
</div>
<div valign="top" class="tabel-coding">
<iframe id="preview"></iframe>
</div>
</tbody>
<td align="left">
<button onclick="javascript:location.reload(true)" class="btn reload" title="Reload/refresh seluruh halaman">Reload</button>
<button class="btn uncss" type="text" title="UnCompress kode CSS" href="javascript:void(0);" onclick="window.open('<?php echo site_url('dashboard/css_unifier') ?>', 'uncss', 'left=92,top=295,width=1000,height=420')">UnCSS</button>
<button class="btn doc" type="text" href="javascript:void(0);" onClick="window.open('<?php echo site_url('dashboard/cheat') ?>', '', 'fullscreen=yes, scrollbars=auto');">Doc</button>
</td>
</tr>
</table>
</div>
<script>
var delay;
// Initialize CodeMirror editor with a nice html5 canvas demo.
var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
    matcBrackets: true,
    lineNumbers: true,
    mode: 'text/html',
    tabMode: 'indent',
    matchTags: {bothTags: true},
    extraKeys: {'Ctrl-J': 'toMatchingTag'}, 
  highlightSelectionMatches: {showToken: /\w/},
  lineNumbers: true
});

editor.on("change", function() {
    clearTimeout(delay);
        delay = setTimeout(updatePreview, 300);
    });
function updatePreview() {
    var previewFrame = document.getElementById('preview');
    var preview =  previewFrame.contentDocument ||  previewFrame.contentWindow.document;
        preview.open();
        preview.write(editor.getValue());
        preview.close();
}
setTimeout(updatePreview, 300);
</script>
</body>
</html>
        
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->