// Criando classe Aluno
class Aluno{
    #nota

    constructor(nome, idade, nota){
        // constructor é um metodo tradicional
        this.nome = nome;
        this.idade = idade;
        this.#nota =  nota; 
    }
    estudar = () => console.log(`${this.nome} está estudando.`);

    jogar = () => console.log(`${this.nome} está jogando elden ring(oliginal).`)

    ver = () => this.#nota 

    tudo = () => console.log(`nome do aluino: ${this.nome}, tem ${this.idade} anos e tirou ${this.#nota} na prova`)

}

const gabriel = new Aluno("gabriel" , 16 , 74)

gabriel.tudo()

gabriel.jogar()
