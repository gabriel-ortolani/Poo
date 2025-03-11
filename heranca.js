// cria a classe Pessoa
// com parametro de nome e idade

class pessoa{
    constructor(nome, idade){
        this.nome = nome;
        this.idade = idade;
    }

    apresentar = () => console.log(`olá, sou ${this.nome} e tenho ${this.idade} anos.`);
    

}
    

class aluno extends pessoa{
    estudar = () => console.log(`${this.nome} está estudando.`);

    fake = () => console.log(`${this.nome} está fingindo que ta estudando`);
}

class professor extends pessoa{
    encinar = () => console.log(`${this.nome} está encinando.`);
}

// criando objetos
const gabriel = new aluno("Gabriel", 16)
const miguel = new aluno("Miguel", 27)
const raul = new professor("Raul", 28)
const nadja = new professor("Nadja", 20)

gabriel.apresentar()
miguel.apresentar()
raul.apresentar()
nadja.apresentar()

gabriel.estudar()
miguel.fake()
raul.encinar()
nadja.encinar()