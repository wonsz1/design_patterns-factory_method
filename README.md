
**Metoda wytwórcza** 

Metoda Wytwórcza oddziela kod konstruujący produkty od kodu który faktycznie z tych produktów korzysta. Dlatego też łatwiej jest rozszerzać kod konstruujący produkty bez konieczności ingerencji w resztę kodu.

Metoda Wytwórcza definiuje metodę która ma służyć tworzeniu obiektów bez bezpośredniego wywoływania konstruktora (poprzez operator new). Podklasy mogą nadpisać tę metodę w celu zmiany klasy tworzonych obiektów.

**Identyfikacja**: Metody wytwórcze można poznać po metodach kreacyjnych tworzących obiekty na podstawie konkretnych klas, ale zwracających typ abstrakcyjny lub interfejs.