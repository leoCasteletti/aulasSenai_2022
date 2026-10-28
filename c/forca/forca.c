#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>
#include "forca.h" // Puxando outro arquivo.
#define TAMANHOPALAVRA 20

// Abertura de variáveis globais.
char palavrasecreta[TAMANHOPALAVRA];
char chutes[26];
int chutesdados = 0;

int enforcou(){
    return chuteserrados() >= 5;

    
//    // É feito um loop para enquanto ele não acertar todas as letras, ficará repetindo até acertar letras que compõe a palavra secreta.
//    for(int i = 0; i < chutesdados; i++){
//        int existe = 0;
//
//        // Olhamos letra por letra da palavra secreta e verificamos se encontramos o chute aqui.        
//        for(int j = 0; j < strlen(palavrasecreta); j++){
//            if(chutes[i] == palavrasecreta[j]){
//                // Encontrou, vamos cancelar o loop.
//                existe = 1;
//                break;
//            }
//        }
//
//        // Caso não tenha encotrando, soma +1 na quantidade de erros.
//        // Invertendo o valor do existe de falso para verdadeiro.
//        if(!existe) erros++;
//
//        /*OU
//        if (!existe){
//            erros++;
//        }*/
//    }
//
//    // Se tivermos mais do que 5 erros, retornamos 1. Caso contrário, retornaremos 0.
//    return erros >= 5 + 1;
//
}

int ganhou(){
    for(int i = 0; i < strlen(palavrasecreta); i++){
        if(!jachutou(palavrasecreta[i])){
            return 0;            
        }
    }
    return 1;
}

void abertura(){
    printf("      P  /_\\  P                          \n");
    printf("     /_\\_|_|_/_\\                        \n");
    printf(" n_n | ||. .|| | n_n         Bem vindo ao \n");
    printf(" |_|_|nnnn nnnn|_|_|        Jogo de forca \n");
    printf("|" "  |  |_|  |"  " |                     \n");
    printf("|_____| ' _ ' |_____|                     \n");
    printf("      \\__|_|__/                          \n");

}

void chuta(){
    char chute;
        printf("Qual letra? ");
        scanf(" %c", &chute);

        if(letraexiste(chute)) {
        printf("Você acertou: a palavra tem a letra %c\n\n", chute);
        } else {
        printf("\nVocê errou: a palavra NAO tem a letra %c\n\n", chute);
        }

        chutes[chutesdados] = chute;
        (chutesdados)++;
}

int jachutou(char letra){
    int achou = 0;
    for(int j = 0; j < chutesdados; j++){
        if(chutes[j] == letra){
            achou = 1;
            break;
        }
    }
    return achou;
}

int letraexiste(char letra){
    for(int j = 0; j < strlen(palavrasecreta); j++){
        if(letra == palavrasecreta[j]){
            return 1;
        }
    }
    return 0;
}

int chuteserrados(){
    int erros = 0;

    for(int i = 0; i < chutesdados; i++){
        if(!letraexiste(chutes[i])){
            erros++;
        }
    }
    return erros;
}

void desenhaforca(){
    int erros = chuteserrados();

   printf("  _______       \n");
    printf(" |/      |      \n");
    printf(" |      %c%c%c  \n", (erros>=1?'(':' '), (erros>=1?'_':' '), (erros>=1?')':' '));
    printf(" |      %c%c%c  \n", (erros>=3?'\\':' '), (erros>=2?'|':' '), (erros>=3?'/': ' '));
    printf(" |       %c     \n", (erros>=2?'|':' '));
    printf(" |      %c %c   \n", (erros>=4?'/':' '), (erros>=4?'\\':' '));
    printf(" |              \n");
    printf("_|___           \n");
    printf("\n\n");

    if(erros == 1){}

    printf("Voce ja deu %d chutes\n", chutesdados);

    // STRLEN -> Procura quantas letras tem na palavra secre, ou seja, ele varre para ver a palavra secreta.
    for(int i = 0; i < strlen(palavrasecreta); i++){
        // Se ele chutou uma letra que tenha na palavra secreta, irá colocar que você acertou.
        if(jachutou(palavrasecreta[i])){
            printf("%c", palavrasecreta[i]);
        } else {
            printf("_ ");
        }
    }
    printf("\n");
}

void escolhepalavra(){
    // Abre o(s) arquivo(s) que estão as palavras.
    FILE* f;

    f = fopen("palavras.txt", "r");    
    if (f == 0){
        printf("Banco de dados nao disponivel\n\n");
        exit(1);
    }
    // Descobre a quantidade de palavras que tem no arquivo.
    int quantidadedepalavras;
    fscanf(f, "%d", &quantidadedepalavras);

    // Gera número aleatório (Incluir time.h), ou seja, calcula um número randomico para puxar.
    srand(time(0));
    // Pega a quantidade de palavras e faz -1, pois o rand devolve um número grande e eu quero um número útil para mim.
    int randomico = rand() % quantidadedepalavras;

    // Lê do arquivo até chegar na linha desejada, ou seja, aqui vai um loop que vai de 0 até o número randômico que escolhi.
    for(int i = 0; i <= randomico; i++){
        // Lê o tanto de palavras que tem dentro da pasta.
        fscanf(f, "%s", palavrasecreta);
    }
    fclose(f);
}

void adicionapalavra(){
    char quer;

    printf("Voce deseja adicionar uma nova palavra no jogo (S/N)?");
    scanf(" %c", &quer);

    if (quer == 'S'){
        char palavra[TAMANHOPALAVRA];

        printf("Escolha a palavra, usando letras maiusculas: ");
        scanf("%s", palavra);

        FILE* f;
        // Abre o arquivo.
        f = fopen("palavras.txt", "r+");
        if(f == 0){
            printf("Banco de dados de palavras nao disponivel\n\n");
            exit(1);
        }

        int qtd;
        fscanf(f, "%d", &qtd);
        qtd++;
        fseek(f, 0, SEEK_SET);
        fprintf(f, "%d", qtd);
        fseek(f, 0, SEEK_END);
        fprintf(f, "\n%s", palavra);

        fclose(f);
    }
}

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    abertura();
    escolhepalavra();

    do {
        chuta();
        desenhaforca();

    // Envocando a função "enforcou".
    } while (!ganhou() && !enforcou());

    if(ganhou()) {
        printf("\nParabéns, voce ganhou!\n\n");

        printf("       ___________      \n");
        printf("      '._==_==_=_.'     \n");
        printf("      .-\\:      /-.    \n");
        printf("     | (|:.     |) |    \n");
        printf("      '-|:.     |-'     \n");
        printf("        \\::.    /      \n");
        printf("         '::. .'        \n");
        printf("           ) (          \n");
        printf("         _.' '._        \n");
        printf("        '-------'       \n\n");

    } else {
        printf("\nPoxa, voce foi enforcado!\n");
        printf("A palavra era **%s**\n\n", palavrasecreta);

        printf("    _______________         \n");
        printf("   /               \\       \n"); 
        printf("  /                 \\      \n");
        printf("//                   \\/\\  \n");
        printf("\\|   XXXX     XXXX   | /   \n");
        printf(" |   XXXX     XXXX   |/     \n");
        printf(" |   XXX       XXX   |      \n");
        printf(" |                   |      \n");
        printf(" \\__      XXX      __/     \n");
        printf("   |\\     XXX     /|       \n");
        printf("   | |           | |        \n");
        printf("   | I I I I I I I |        \n");
        printf("   |  I I I I I I  |        \n");
        printf("   \\_             _/       \n");
        printf("     \\_         _/         \n");
        printf("       \\_______/           \n");
        break;
    }

    adicionapalavra();
}

//BIBLIOTECA QUE PUXA O STRLEN - <string.h>;
//NÃO PODE USAR UM RETURN DENTRO DA VOID;