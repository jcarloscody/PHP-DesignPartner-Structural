**Design Patterns - Structural**

Anotações e rascunhos de estudos

[**GitHub**](https://github.com/jcarloscody/PHP-DesignPartner-Structural)

[Parte 1](https://github.com/jcarloscody/PHP-DesignPartner-Behavioral)

- **Adapter**
Com o adapter conseguimos estruturar instâncias que são incompatíveis por meio de uma interface comum. Na exemplificação foi usado numa hipotética comunicação com uma API.

- **Bridge**
A ideia é a criação de uma ponte entre duas implementações. Na exemplificação foi usado a hipótese  de criação de relatório do conteúdo versus a forma de salva-lo ou exporta-lo. De um lado temos a implementação do conteúdo (orçamento, pedido...) e de outro temos a implementação da forma de exportar (xml, zip...) e por meio deste padrão torna-se mais simples a solução ser escalada.

- **Decorator**
A ideia é em tempo de execução(sem criar a nova class) ter a possibilidade de adicionar nova funcionalidade em uma classe, ou seja, em tempo de execução, sem alteração de código, para um funcionalidade X adicionar mais funcionalidade Y. Na exemplificação foi usada na aplicação de mais de um impostos sobre a base de cálculo.

- **Composite ou Árvore de Objetos**
A ideia é representar uma árvore de objetos, e ficar mais acessível as  instâncias. Na exemplificação foi usado o orçamento como objeto, e o objetivo era tornar um orçamento ser também um item de outro orçamento, ou seja, um orçamento compor outro orçamento. Ao fazer isto cria-se uma árvore.

- **Facade**
Ou fachada, é a ideia de pôr uma interface para uma biblioteca ou framework e que por trás há diversas tarefas complexas. OU seja, a interface será um acesso simples para a complexidade das tarefas embutidas.

- **Proxy**
É  a ideia de um intermediário/interceptador diante das requisições, e na exemplificação é usada a ideia cache para poupar trabalho nas requisições futuras. Então ele irá controlar o acesso a um objeto original, e isto irá criar um objeto fake que irá substitui-lo.

- **Flyweight** 
A ideia é otimizar o uso da memória ram por meio da criação eficiente de instâncias. A forma de segregar os estados das instâncias é distinguindo se são mutáveis ou imutáveis. Portando deve os estados imutáveis serem encapsulados e impedidos de serem alterados. Na exemplificação foi percorrido uma lista de instância e na primeira interação o uso de memória foi de 7 mega, após o uso do padrão o uso foi diminuído para 3.  