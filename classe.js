// Criando classe Aluno
class Aluno{
    constructor(nome, idade){
        // constructor é um metodo tradicional
        this.nome = nome;
        this.idade = idade;
    }
    estudar = () => console.log(`${this.nome} está estudando.`);

    jogar = () => console.log(`${this.nome} está jogando dark souls.`);

    falindo = () => console.log(`${this.nome} está falindo uma empresa enquanto assiste my little poney.`);

    dor = () => console.log(`${this.nome} está sofrendo. `);
}


const gabriel = new Aluno("gabriel" , 16)
const carlos = new Aluno("carlos" , 24)
const miguel = new Aluno("miguel" , 12)
const pedro = new Aluno("pedro" , 71)

// console.log(gabirel.nome)

carlos.estudar()
gabriel.jogar()
miguel.falindo()
pedro.dor()
console.log(miguel.nome , miguel.idade , `anos`)