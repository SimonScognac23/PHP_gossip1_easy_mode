In questo progetto ho creato un sistema di gestione delle categorie per un blog utilizzando la Programmazione Orientata agli Oggetti (OOP) in PHP. Ho definito una classe astratta Category con il metodo astratto getMyCategory(), che viene implementato nelle classi figlie (News, Sport, Gossip e History).

Successivamente, ho sviluppato la classe Post, che rappresenta un articolo del blog. Questa classe ha tre attributi: titolo, categoria e tag. Ho applicato la Dependency Injection, permettendo di passare un oggetto Category al momento della creazione di un Post.

Ho implementato i metodi getTitle(), getCategory() e getTag() per ottenere rispettivamente il titolo, la categoria (attraverso il metodo getMyCategory()) e i tag dell’articolo. Infine, ho istanziato alcuni oggetti Post e ne ho stampato la categoria.

Questo approccio garantisce un codice pulito, scalabile e facilmente estendibile.

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

In this project, I created a category management system for a blog using Object-Oriented Programming (OOP) in PHP. I defined an abstract class Category with the abstract method getMyCategory(), which is implemented in its child classes (News, Sport, Gossip, and History).

Next, I developed the Post class, which represents a blog article. This class has three attributes: title, category, and tags. I applied Dependency Injection, allowing a Category object to be passed when creating a Post.

I implemented the methods getTitle(), getCategory(), and getTag() to retrieve the title, category (via getMyCategory()), and tags of the article. Finally, I instantiated some Post objects and printed their categories.

This approach ensures clean, scalable, and easily extendable code.
