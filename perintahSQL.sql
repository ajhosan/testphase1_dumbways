
-- Menampilakn Data users beserta contentnya
select * from users_tb inner join post_tb on users_tb.id_users = post_tb.id_post where id_users = 2 ;

-- Insert Data pada table users_tb

insert into users_tb (name, photo, email, password)
    -> values
    -> (
    -> "Dumbways 1",
    -> "image1.jpg",
    -> "tester1@tester.com",
    -> md5("tester1"));

-- Insert Data pada table post_tb
insert into post_tb(content, image, users_id)
    -> values(
    -> "Ini Content Pertama",
    -> "contentimage1.jpg",
    -> "3");

-- Menampilkan Data Content berdasarkan contentnya
select * from post_tb inner join users_tb on post_tb.id_post = users_tb.id_users where id_post = 1 ;

-- Mengubah salah satu data pada table
update users_tb set name = "Dumways Update Name Success 2" where id_users = 1 ;