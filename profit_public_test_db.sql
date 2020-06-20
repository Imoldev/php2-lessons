create table test_db
(
    id          serial not null
        constraint test_db_pk
            primary key,
    char_field  varchar,
    int_field   integer,
    modified_at varchar
);

alter table test_db
    owner to profit;

INSERT INTO public.test_db (id, char_field, int_field, modified_at) VALUES (2, '23:39:28', 11111, null);
INSERT INTO public.test_db (id, char_field, int_field, modified_at) VALUES (3, '23:39:34', 11111, null);
INSERT INTO public.test_db (id, char_field, int_field, modified_at) VALUES (4, '23:39:52', 11111, null);
INSERT INTO public.test_db (id, char_field, int_field, modified_at) VALUES (1, 'modified', 222222, '23:39:52');