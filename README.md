# php_study
PHP 공부   
> 참고자료 
  - 쉽게 배우는 PHP 웹프로그래밍
  - https://phpspreadsheet.readthedocs.io/en/latest/
 
- PhpSpreadSheet
  - WorkSheet 이름은 자동으로 저장되지 않음 setTitle() 메소드 사용해야 함  

- session_start()
  - session 데이터를 호출하는 함수.
  - 스크립트 상단에서 해당 함수를 호출하는 것이 좋음. html - php 코드가 수차례 반복된 이후에 session데이터를 호출할 시, html 응답 헤더 처리가 어려워질 수 있음. 