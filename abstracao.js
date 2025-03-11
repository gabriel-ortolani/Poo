class pessoa{
    constructor(nome){
        if(this.constructor === pessoa){
            throw new Error("não foi possivel efetuar a criação dessa pessoa")
        } 
        this.nome = nome
    }
}

class aluno extends pessoa{
    apresentar = () => console.log(`olá, eu sou ${this.nome} e eu sou um aluno`);
}

class professor extends pessoa{
    apresentar = () => console.log(`olá, sou ${this.nome} e eu sou um professor.`);
}

const gabriel = new aluno("Gabriel")
const raul = new professor("Raul")

gabriel.apresentar()
raul.apresentar()

/* const carlos = new pessoa("Carlos") */
/* carlos.apresentar() */
