## Ano Bissexto
 - Disciplina de testes TDD ifrn

## Alunos
 - Adrianny Reis
 - Francisca Leísia

## Problema disponivel em:
  - http://dojopuzzles.com/problemas/exibe/ano-bissexto/

## Plano de teste
 - Variaveis
   - Ano
 - Condições
   - Ano > 0
 - Valores Válidos
   - Ano % 4 == 0 && Ano % 100 != 0
   - Ano % 400 == 0
 - Valores Inválidos
   - Ano % 4 != 0 || Ano % 100 == 0
   - Ano % 400 != 0

## Classes de equivalencia (plano de teste)
  - Case 1 value (0)
    - Ano <= 0 (false)
  - Case 2 value (1424)
    - ano % 4 == 0 and ano % 100 != 0 (true)
  - Case 3 value (1750)
    - ano % 4 != 0 (false)
  - Case 4 value (2500)
    - ano % 100 == 0 (false)
  - Case 5 value (1600)
    - ano % 400 == 0 (true)
  - Case 6 value (1400)
    - ano % 400 != 0 (false)
