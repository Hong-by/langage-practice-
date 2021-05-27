-- 테이블 생성
-- CREATE TABLE table-name(

--)

CREATE TABLE `members` (
  `idx` INT NOT NULL AUTO_INCREMENT COMMENT '고유번호',
  --컬럼 이름: idx, INT : 숫자, NOT NULL : 필수 입력값, AUTO_INCREMENT : 자동 증가, COMMENT : 설명
  `id` VARCHAR(15) NOT NULL COMMENT '아이디',
  -- VARCHAR(15) : 변할 수 있는 공간, 길이 15
  `name` varchar(25) NOT NULL COMMENT '이름',
  `pass` varchar(30) NOT NULL COMMENT '비밀번호',
  `phone` varchar(13) NOT NULL COMMENT '휴대폰 번호',
  PRIMARY KEY(`idx`)
) charset = utf8 comment = '회원정보'

-- DROP TABLE TABLE-NAME

DROP TABLE `members`

-- 필드 추가 ALTER TABLE TABLE-NAME ADD [추가할 필드명][필드 속성] AFTER [필드 위치]

ALTER TABLE `members` ADD current_age INT COMMENT '나이' AFTER phone

-- 필드 변경 ALTER TABLE TABLE-NAME CHANGE [기존 필드명][변경할 필드명][속성]

ALTER TABLE `members` CHANGE current_age nationality VARCHAR(20) COMMENT '국적'

-- 데이터 입력 INSERT INTO TABLE-NAME (field1, field2, ...) VALUES ('field value1', 'field value2', ...)
-- 데이터 입력 시 고유번호는 입력하지 않는다.

INSERT INTO `members` (id, name, pass, phone, nationality) VALUES('marshall', '홍길동', '123456' '010-1234-1234', 'Korea')