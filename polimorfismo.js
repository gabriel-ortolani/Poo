class pessoa{
    constructor(nome){
        // constructor é um metodo tradicional
        this.nome = nome
    }

    apresentar = () => console.log(`olá, sou ${this.nome}`);
}

class aluno extends pessoa{
    apresentar = () => console.log(`olá, sou ${this.nome} e eu sou um aluno.`);
}

class professor extends pessoa{
    apresentar = () => console.log(`olá, sou ${this.nome} e eu sou um professor.`);
}


const gabriel = new aluno("Gabriel")
const raul = new professor("Raul")

gabriel.apresentar();
raul.apresentar();