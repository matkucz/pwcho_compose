Projekt zawiera trzy kontenery: php, mysql oraz apache.
Kontenery działają w dwóch sieciach: backend oraz frontend.
Do sieci backend sa podłączone wszystkie trzy kontenery, natomiast do sieci frontend jest podłączony tylko kontener apache.
Kontener php jest oparty o obraz PHP.
Kontener mysql oparty jest o MySQL.
Kontener apache oparty jest o PHP-Apache (serwer Apache z zainstalowanym rozszerzeniem PHP).
W kontenerze MySQL istnieje baza danych apache_test, która to zawiera tabele test. Do tabeli tej zostały dodane trzy rekordy.
Po wpisaniu w pole przeglądarki adresu localhost:6666, serwer Apache wykonuje zapytanie do serwera PHP, który to pobiera dane z bazy danych znajdującej się w kontenerze mysql.
Dane te są pobieranie przez kontener php, który następnie odsyła dane do serwera Apache. Serwer apache wyświetla nam te dane.

W katalogu uruchamiamy następujące polecenia:
docker-compose build
docker-compose up

W przeglądarce Firefox może wystąpić błąd odnośnie zabronionego portu.
Aby obejść ten problem należy:
1) W polu adresu przeglądarki wpisać about:config
2) Wyszukać frazę: network.security.ports.banned.override
3) Jeżeli reguła istnieje to po przecinku dodać nowy numer portu, w tym przypadku 6666.
4) Jeżeli reguła nie istnieje, to naciskamy plus, a następnie wpisujemy numer portu.
Do danych można mieć również dostęp poprzez użycie polecenia curl dostępnego w systemie linux:
curl localhost:6666
