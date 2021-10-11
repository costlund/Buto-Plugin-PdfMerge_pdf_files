# Buto-Plugin-PdfMerge_pdf_files
Merged pdf files.

## Widget merge
Output pdf in browser.
```
type: widget
data:
  plugin: pdf/merge_pdf_files
  method: merge
  data:
    files:
      - /theme/[theme]/data/file_1.pdf
      - /theme/[theme]/data/file_2.pdf
    destination: I
    outputPath: null
```
Download file.
```
    destination: D
    outputPath: file_merged.pdf
```
Save file to disk.
```
    destination: F
    outputPath: /../buto_data/theme/[theme]/file_merged.pdf
```

## Method merge
It could be more handy when save file to disk to use the method merge from a plugin.

## Param metod
Run method to modify data.
```
    method:
      -
        plugin: kanuts/nordisk_kaninstandard
        method: add_user_page
```

