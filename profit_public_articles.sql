create table articles
(
    id      serial  not null
        constraint articles_pk
            primary key,
    preview varchar not null,
    content varchar not null,
    title   varchar not null,
    date    date default CURRENT_DATE
);

alter table articles
    owner to profit;

INSERT INTO public.articles (id, preview, content, title, date) VALUES (3, 'Три категoрии наших пенсионеров мoгут надеяться на прибавку к государственной дeнeжной пeнсии после 1 августа 2020 года.', 'Государственные выплаты увеличатся для работающих пенсионеров, которые в 2019 году выплатили страховые взносы. При этом максимальная прибавка будет ограничена тремя пенсионными баллами, размер которых пересчитывается раз в год.

С 1 августа в России также произойдет увеличение накопительных пенсий. Их получатели могут рассчитывать на индексацию в размере 9,13%, что в три раза выше уровня инфляции, которая на конец 2019 года составляла 3%.

Кроме того, вырастут пенсии у участников программы софинансирования пенсионных накоплений. Согласно данным ПФР, на сегодняшний день получателями срочной пенсионной выплаты являются 32 тысячи человек.', 'С 1 августа прибавку к пенсии получат российские пенсионеры', '2020-06-20');
INSERT INTO public.articles (id, preview, content, title, date) VALUES (1, 'Специалисты связывают рост стоимости ценных бумаг «Яндекса» с общим оптимизмом на фондовых рынках, особенно в части интернет-компаний', '
Акции «Яндекса» обновили исторический максимум. Стоимость ценных бумаг компании на Московской бирже превысила 3160 рублей. Предыдущий рекорд был установлен еще в феврале, однако в марте на фоне распространения коронавируса, акции потеряли около четверти стоимости – об этом пишет газета «Коммерсантъ».

Специалисты связывают рост стоимости ценных бумаг «Яндекса» с общим оптимизмом на фондовых рынках, особенно в части интернет-компаний, а также с выходом государства в лице Сбербанка из совместного проекта «Беру».', 'Акции «Яндекса» обновили исторический максимум', '2020-06-18');
INSERT INTO public.articles (id, preview, content, title, date) VALUES (4, 'Спецпосланник президента США Маршалл Биллингсли 22 и 23 июня в Австрии обсудит с замглавы МИД России Сергеем Рябковым будущее договоров о контроле над вооружениям. Кроме того, США направили приглашение Китаю присоединиться к дискуссиям.', 'Специальный посланник президента США по контролю над вооружениями Маршалл Биллингсли 22 и 23 июня в Австрии обсудит с заместителем министра иностранных дел России Сергеем Рябковым вопросы своей непосредственной компетенции.

Кроме того, Соединенные Штаты направили открытое приглашение Китаю присоединиться к этим дискуссиям и четко заявили о необходимости того, чтобы все три страны добросовестно вели переговоры о контроле над вооружениями, сообщается на сайте Госдепартамента США.

Новый раунд переговоров о ядерном разоружении с США и Россией Биллингсли анонсировал еще в начале нынешнего месяца.

«Сегодня договорились с заместителем министра иностранных дел России Рябковым о времени и месте переговоров о ядерном разоружении в июне. Китай тоже приглашен. Приедет ли Китай и будет ли он вести переговоры добросовестно?» — написал он на своей странице в Twitter.

Рябков подтвердил договоренность с Вашингтоном.

«22 июня в Вене пройдет встреча по контролю над вооружениями и стратегической стабильности на уровне с российской стороны заместителя министра иностранных дел, с американской — спецпосланника президента США Маршалла Биллингсли. Консультации будут проводиться в межведомственном формате. Мы позитивно оцениваем возобновление такого рода контактов», — указал дипломат.', 'США пригласили Россию и Китай обсудить контроль над вооружениями', '2020-06-19');
INSERT INTO public.articles (id, preview, content, title, date) VALUES (5, 'Президент США Дональд Трамп раскритиковал решение Верховного суда, согласно которому администрации США не имела право отменять программу DACA, защищающую от депортации около восьмисот тысяч нелегальных иммигрантов, прибывших на американскую территорию в детском возрасте.', 'Президент США Дональд Трамп раскритиковал решение Верховного суда, согласно которому администрации США не имела право отменять программу DACA, защищающую от депортации около восьмисот тысяч нелегальных иммигрантов, прибывших на американскую территорию в детском возрасте. Об этом глава государства написал в совсем Twitter в четверг, 18 июня.

 

В своем микроблоге Трамп указал, что «эти ужасные и политически мотивированные решения, исходящие из Верховного суда, являются выстрелами из дробовика в лицо людей, которые гордятся тем, что называют себя республиканцами или консерваторами». Политик добавил, что консерваторам «нужно больше судей» в Верховном суде. Помимо этого, Трамп призвал голосовать за него на предстоящих выборах.

 

Согласно решению Верховного суда США, администрация не обосновала отмену программу DACA должным образом. Однако вопрос не решен окончательно, поскольку администрация может предоставить более подробные обоснования для отмены программы, чтобы вновь попытаться ее отменить.', 'Суд запретил Трампу депортировать 800 тысяч мигрантов', '2020-06-17');
INSERT INTO public.articles (id, preview, content, title, date) VALUES (2, 'В ночь на 21 июня в ряде российских регионов ожидаются заморозки до минус двух градусов. Речь идет о Томской, Омской, Новосибирской, Кемеровской, Свердловской областях и Пермском крае. Об этом сообщил ТАСС научный руководитель Гидрометцентра РФ Роман Вильфанд.', 'В ночь на 21 июня в ряде российских регионов ожидаются заморозки до минус двух градусов. Речь идет о Томской, Омской, Новосибирской, Кемеровской, Свердловской областях и Пермском крае. Об этом сообщил ТАСС научный руководитель Гидрометцентра РФ Роман Вильфанд.

Синоптик отметил, что отрицательные температуры в этих регионах в разгар лета — большая редкость.', 'Гидрометцентр предупредил о заморозках в России', '2020-06-16');