# Buto-Plugin-PdfMerge_pdf_files

<p>Merged pdf files.</p>

<a name="key_0"></a>

## Widgets



<a name="key_0_0"></a>

### widget_merge

<p>Output pdf in browser.</p>
<pre><code>type: widget
data:
  plugin: pdf/merge_pdf_files
  method: merge
  data:
    files:
      - /theme/[theme]/data/file_1.pdf
      - /theme/[theme]/data/file_2.pdf</code></pre>
<p>View file.</p>
<pre><code>    destination: I
    outputPath: null</code></pre>
<p>Download file.</p>
<pre><code>    destination: D
    outputPath: file_merged.pdf</code></pre>
<p>Save file to disk.</p>
<pre><code>    destination: F
    outputPath: /../buto_data/theme/[theme]/file_merged.pdf</code></pre>
<p>Display errors (default 0).</p>
<pre><code>    display_errors: 1</code></pre>
<p>Run method to modify data.</p>
<pre><code>    method:
      -
        plugin: my/plugin
        method: my_method</code></pre>

<a name="key_1"></a>

## Methods



<a name="key_1_0"></a>

### merge

<p>It could be more handy when save file to disk to use the method merge from a plugin.</p>

