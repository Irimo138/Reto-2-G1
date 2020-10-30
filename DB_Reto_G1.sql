drop table productos;
create database reto;

insert into tiendas values("zara", "Textil", "9:00-21:00",56);
insert into tiendas values("Game", "Videojuegos", "9:00-21:00",49);
insert into productos values("Horizon", "videojuego de PS4", 45 ,12,98,49);
insert into productos values("Skyrim", "Videojuego multiplataforma",15,60,84,49);
insert into productos values("Camiseta", "Camiseta basica talla S",50,5,56);
insert into productos values("GTA V", "videojuego de PS4", null, 3,63,null,11,49);

select * from productos;
