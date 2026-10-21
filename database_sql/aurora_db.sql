drop database if exists aurora_cafe ;

create database aurora_cafe;

use aurora_cafe;

create table produtos(
id int not null primary key auto_increment,
imagem varchar(100),
nome varchar(35) not null,
preco varchar(20) not null,
descricao varchar(100),
categoria varchar(20)

);

insert into produtos(nome, preco, descricao, categoria) values

-- Doces e acompanhamentos

("Pão de Queijo Mineiro" , "R$ 6,50" , "Pão de queijo artesanal, assado diariamente e servido quentinho." , 1),
("Bolo de Fubá Cremoso", "R$ 9,90" , "Bolo caseiro de fubá com textura cremosa e sabor tradicional." , 1),
("Brownie de Chocolate" , "R$ 11,90" , "Brownie artesanal de chocolate meio amargo, com interior macio." , 1),
("Cheesecake de Frutas Vermelhas" , "R$ 15,90" , "Cheesecake cremoso com calda artesanal de frutas vermelhas." , 1),

-- Brunch e almoço

("Pão na Chapa Aurora" , "R$ 13,90", "Pão artesanal tostado na manteiga, acompanhado de queijo minas." , 2),
("Sanduíche da Serra" , "R$ 24,90", "Pão artesanal, frango desfiado, queijo minas, tomate e molho da casa." , 2),
("Brunch Aurora" , "R$ 34,90", "Café coado, pão de queijo, ovos mexidos, frutas, bolo do dia e pão artesanal." , 2),
("Prato do Dia" , "R$ 29,90", "Almoço preparado diariamente com ingredientes frescos e inspiração mineira." , 2),

-- Produtos da Loja

("Café Aurora 250g" , "R$ 29,90", "Café em grãos de pequenos produtores parceiros de Minas Gerais." , 3),
("Café Aurora Moído 250g" , "R$ 27,90", "Café selecionado e moído, pronto para preparar em casa." , 3),
("Kit Café Mineiro" , "R$ 49,90", "Café Aurora 250g, pão de queijo congelado e caneca exclusiva da casa." , 3)

;

insert into produtos(imagem, nome, preco, descricao, categoria) values

("imgs/cafe_espresso_aurora.webp", 
"Espresso Aurora" , 
"R$ 7,90" ,
"Café espresso com grãos selecionados, torra média e sabor equilibrado.",
4),

("imgs/cappucino.jpg",
"Cappuccino da Casa" ,
"R$ 12,90",
"Espresso, leite vaporizado e uma camada cremosa de espuma, finalizado com canela.",
4
),

("imgs/cafe_coado.jpg","Café Coado Mineiro" , "R$ 9,90" , "Café coado na hora, preparado com grãos de produtores parceiros de Minas Gerais.", 4 ),

("imgs/mocha_aurora.webp", "Mocha Aurora" , "R$ 14,90" , "Espresso, leite vaporizado e chocolate, finalizado com uma camada cremosa.", 4);

select * from produtos