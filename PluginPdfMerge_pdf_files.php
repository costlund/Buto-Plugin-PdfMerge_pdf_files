<?php
class PluginPdfMerge_pdf_files{
  function __construct(){
    require_once(__DIR__."/lib/MergePdf.class.php");
  }
  public function widget_merge($data){
    $data = new PluginWfArray($data);
    /**
     * 
     */
    if(!$data->get('data/display_errors')){
      $data->set('data/display_errors', 0);
    }
    ini_set('display_errors', $data->get('data/display_errors'));
    /**
     * method
     */
    if($data->get('data/method')){
      foreach($data->get('data/method') as $v){
        $i = new PluginWfArray($v);
        wfPlugin::includeonce($i->get('plugin'));
        $method = $i->get('method');
        $obj = wfSettings::getPluginObj($i->get('plugin'));
        $data = new PluginWfArray($obj->$method($data->get()));
      }
    }
    /**
     * 
     */
    $files = $data->get('data/files');
    $destination = $data->get('data/destination');
    $outputPath = $data->get('data/outputPath');
    $this->merge($files, $destination, $outputPath);
  }
  public function merge($files, $destination = 'I', $outputPath = null){
    /**
     * 
     */
    foreach($files as $k => $v){
      $files[$k] = wfGlobals::getAppDir().wfSettings::replaceTheme($v);
    }
    /**
     * 
     */
    if($outputPath && $destination=='F'){
      $outputPath = wfGlobals::getAppDir().wfSettings::replaceTheme($outputPath);
    }
    /**
     * 
     */
    MergePdf::merge($files, $destination, $outputPath);
  }
}
