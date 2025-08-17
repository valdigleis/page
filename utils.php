<?php

class Courses {

  private string $url;
  private string $name;
  private int $year;
  private int $semester;

  public function __construct(string $url, string $name, int $year, int $semester) {
		$this->url = $url;
    $this->name = $name;
    $this->year = $year;
    $this->semester = $semester;
  }

  public function getUrl(): string {
    return $this->url;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getYear(): int {
    return $this->year;
  }

  public function getSemester(): int {
    return $this->semester;
  }
}


function getFiles($url) {
  $resultados = [];
  foreach (glob($url . '/*', GLOB_ONLYDIR) as $folder) {
    $nameFolder = basename($folder);
    foreach (glob($folder . '/*.html') as $file) {
      $dom = new DOMDocument();
      libxml_use_internal_errors(true);
      $dom->loadHTMLFile($file);
      libxml_clear_errors();
      $urlFile = $url . '/' . $nameFolder . '/' . basename($file) . '.html';
      $nameFile = basename($file);
      $yearCourse = intval(trim($dom->getElementById('year')->textContent));
      $semesterCourse = intval(trim($dom->getElementById('semester')->textContent));
      $page = new Courses($urlFile, $nameFile, $yearCourse, $semesterCourse);
      $resultados[] = $page;
    }
  }
  return $resultados;
}

?>