class pessoa{
    #doenca

    constructor(nome,idade,profissao,doenca){
        this.nome = nome;
        this.idade = idade;
        this.profissao = profissao;
        this.#doenca = doenca;
    }    

    getDoenca() {
        return this.#doenca;
    }
}



class paciente extends pessoa{
    exame = () => {
        return `${this.nome} está esperando a consulta e tem ${this.idade} anos e está com ${this.getDoenca()}`
    }
}

class funcionario extends pessoa{
    medico = () => {
        return `O ${this.nome} está trabalhando como ${this.profissao} e tem ${this.idade} anos`; // Agora retorna a string
    };
}
const beatriz = new funcionario("Beatriz Almeida","47","Cardiologista")
const ricardo = new funcionario("Ricardo Silva","43","Cirurgião Geral")
const ana = new funcionario("Ana Souza","27","Enfermeira Chefe")
const carlos = new funcionario("Carlos Pereira","82","Técnico de Enfermagem")
const maria = new funcionario("Maria Costa","28","Psicóloga Hospitalar")
const joão = new funcionario("João Martins","39","Fisioterapeuta")
const fernanda = new funcionario("Fernanda Oliveira","32","Assistente Administrativa")


const lucas = new paciente("Lucas Mendes","28","undelined","Asma")
const julia = new paciente("Julia Silva","34","undelined","Hipertensão")
const mariana = new paciente("Mariana Costa","45","undelined","Diabetes")
const carlosS = new paciente("Carlos Souza","60","undelined","Artrite")
const fernandaL = new paciente("Fernanda Lima","22","undelined","Gastrite")

document.getElementById("m1").innerText = beatriz.medico();
document.getElementById("m2").innerText = ricardo.medico();
document.getElementById("m3").innerText = ana.medico();
document.getElementById("m4").innerText = carlos.medico();
document.getElementById("m5").innerText = maria.medico();
document.getElementById("m6").innerText = joão.medico();
document.getElementById("m7").innerText = fernanda.medico();

document.getElementById("p1").innerText = lucas.exame();
document.getElementById("p2").innerText = julia.exame();
document.getElementById("p3").innerText = mariana.exame();
document.getElementById("p4").innerText = carlosS.exame();
document.getElementById("p5").innerText = fernandaL.exame();