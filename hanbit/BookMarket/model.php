<?php
    $BookArray = [
        "ISBN1234" => ["name" => 'HTML 웹 프로그래밍', "unitPrice" => 29000],
        "ISBN1235" => ["name" => 'JSP 웹 프로그래밍', "unitPrice" => 27000],
        "ISBN1236" => ["name" => '스프링 웹 프로그래밍', "unitPrice" => 30000],
    ];
    $BookArray["ISBN1234"]["author"] = "윤인성";
    $BookArray["ISBN1234"]["description"] = "이 책은 웹 프로그래밍을 시작하는 입문자를 위한 시릇ㅂ서입니다. 단계별 예제를 따라 하며 HTML, CSS3, 자바스크립트의 기초를 익히고 jQuery와 실무에서 쓰이는 다양한 플러그인을 경험할 수 있습니다.";
    $BookArray["ISBN1234"]["category"] = "IT모바일";
    $BookArray["ISBN1234"]["unitInStock"] = 1000;
    $BookArray["ISBN1234"]["releaseDate"] = "2023/08/05";
    $BookArray["ISBN1234"]["condition"] = "N";

    $BookArray["ISBN1235"]["author"] = "송미영";
    $BookArray["ISBN1235"]["description"] = "JSP의 이론적 개념 -> 기본 실습 -> 응용실습 순의 단계별 학습이 가능합니다. 응용 실습이 합쳐져 최정적으로 쇼핑몰 하나를 완성하는 구성이라 배운 내용이 어디에 어떻게 적용되는지 알 수 있습니다.";
    $BookArray["ISBN1235"]["category"] = "IT모바일";
    $BookArray["ISBN1235"]["unitInStock"] = 1000;
    $BookArray["ISBN1235"]["releaseDate"] = "2018/10/08";
    $BookArray["ISBN1235"]["condition"] = "N";

    $BookArray["ISBN1236"]["author"] = "김명호";
    $BookArray["ISBN1236"]["description"] = "스프링 프레임워크의 전체적인 구조와 핵심 이론을 다양한 예제 프로젝트를 통해 배울 수 있습니다. 전자 도서관 시스템의 여러 기능을 구현하며 스프링 MVC의 심화 개념과 실무 기술도 익힐 수 있습니다.";
    $BookArray["ISBN1236"]["category"] = "IT모바일";
    $BookArray["ISBN1236"]["unitInStock"] = 1000;
    $BookArray["ISBN1236"]["releaseDate"] = "2023/07/10";
    $BookArray["ISBN1236"]["condition"] = "N";
    
    function getAllBooks() {
        global $BookArray;
        return $BookArray;
    }

    function getBookById($id) {
        global $BookArray, $bookById;
        
        if(array_key_exists($id, $BookArray)){
            $bookById = $BookArray[$id];
            return $bookById;
        }
        return null;
    }

    function addBook($bookId, $nBook) {
        global $BookArray;
        $BookArray[$bookId]["name"] = $nBook["name"];
        $BookArray[$bookId]["unitPrice"] = $nBook["unitPrice"];
        $BookArray[$bookId]["author"] = $nBook["author"];
        $BookArray[$bookId]["description"] = $nBook["description"];
        $BookArray[$bookId]["category"] = $nBook["category"];
        $BookArray[$bookId]["unitInStock"] = $nBook["unitInStock"];
        $BookArray[$bookId]["releaseDate"] = $nBook["releaseDate"];
        $BookArray[$bookId]["condition"] = $nBook["condition"];
    }
?>
