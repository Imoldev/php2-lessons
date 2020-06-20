create table products
(
    id    serial  not null
        constraint products_pk
            primary key,
    title varchar not null,
    price integer not null
);

alter table products
    owner to profit;

INSERT INTO public.products (id, title, price) VALUES (1, 'Iphone 5x', 5000);
INSERT INTO public.products (id, title, price) VALUES (2, 'Ipad', 10000);