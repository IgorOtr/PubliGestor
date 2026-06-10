# Desenvolvimento SaaS “MoradIA”

Você é um arquiteto de software sênior especializado em Laravel 13, SaaS multiusuário, aplicações escaláveis e marketplaces imobiliários modernos.

Sua tarefa é desenvolver uma aplicação SaaS completa chamada **MoradIA**, utilizando as melhores práticas de arquitetura, segurança, performance e experiência do usuário.

---

# CONTEXTO DO PROJETO

O MoradIA é uma plataforma SaaS focada em conectar compradores de imóveis a corretores imobiliários através de perfis públicos modernos, anúncios de imóveis e mecanismos inteligentes de visibilidade.

A plataforma funciona como uma mistura entre:

* Marketplace imobiliário;
* Rede social para corretores;
* Plataforma de geração de leads;
* Sistema de gestão e visibilidade imobiliária.

O foco principal do produto é:

* aumentar a visibilidade dos corretores;
* facilitar a descoberta de imóveis;
* gerar leads qualificados;
* criar diferenciação entre planos pagos;
* escalar futuramente para IA e recomendação inteligente.

---

# STACK OBRIGATÓRIA

## Backend

* PHP 8.4+
* Laravel 13.x

## Frontend

* Blade + TailwindCSS
* Alpine.js
* TailAdmin para dashboards administrativos

## Infraestrutura

* Docker
* Docker Compose
* Nginx
* MySQL 8
* Phpmyadmin
* Redis (Caso seja necessário)

## Autenticação

* Laravel Breeze
* Reset de senha
* Verificação de e-mail obrigatória para corretores

---

# PADRÕES DE ARQUITETURA OBRIGATÓRIOS

Implemente o sistema seguindo obrigatoriamente:

* Arquitetura em camadas;
* SOLID;
* Clean Code;
* Repository Pattern;
* Service Layer;
* Form Requests para validações;
* Policies/Gates para permissões;
* DTOs quando necessário;
* Eloquent Resources para respostas estruturadas;
* UUID como chave primária;
* Soft Deletes onde fizer sentido;
* Queries otimizadas;
* Paginação em todas as listagens;
* Upload seguro de imagens;
* Cache onde necessário;
* Sistema preparado para filas (queues);
* Estrutura pronta para escalabilidade horizontal futura.

---

# ESTRUTURA DE PASTAS

Organize o projeto de forma profissional:

app/
├── Actions
├── DTOs
├── Enums
├── Helpers
├── Http
├── Models
├── Policies
├── Repositories
├── Services
├── Traits

---

# TIPOS DE USUÁRIOS

## 1. Root

Administrador total da plataforma.

Permissões:

* Gerenciar usuários;
* Gerenciar imóveis;
* Gerenciar planos;
* Gerenciar pagamentos;
* Moderar conteúdos;
* Suspender usuários;
* Dashboard administrativo completo;
* Visualização global da plataforma.

---

## 2. Corretor

Usuário pagante da plataforma.

Possui:

* Perfil público estilo rede social;
* Cadastro de imóveis;
* Estatísticas;
* Geração de leads;
* Sistema de assinatura;
* Dashboard próprio.

---

## 3. Comprador

Usuário comum da plataforma.

Pode:

* Favoritar imóveis;
* Entrar em contato com corretores;
* Visualizar imóveis;
* Criar perfil básico.

---

# PLANOS DO SAAS

Implemente sistema de planos baseado em permissões e limites.

## Starting — R$ 9,90

* Máximo de 10 imóveis;
* Limite na visualização dos contatos dos interessados;
* Sem personalização da mensagem inicial;
* Dashboard básico;
* Visibilidade orgânica simples.

---

## Selling — R$ 29,90

* Máximo de 30 imóveis;
* Visualização completa dos contatos;
* Cadastro de site próprio;
* Impulsionamento regional;
* Dashboard básico.

---

## Billing — R$ 59,90

* Imóveis ilimitados;
* Personalização da mensagem inicial;
* Integração com redes sociais;
* Impulsionamento avançado;
* Dashboard avançado;
* Estatísticas;
* Módulo de IA;
* Insights inteligentes.

---

# REGRAS IMPORTANTES DE NEGÓCIO

## Corretores

* Devem possuir perfil público;
* Devem possuir slug único;
* Possuem nível de relevância;
* Possuem score baseado em:

  * visualizações;
  * favoritos;
  * engajamento;
  * conversões;
  * quantidade de imóveis.

---

## Imóveis

Cada imóvel deve conter:

* Nome;
* Descrição;
* Categoria;
* Localização;
* Preço;
* Fotos;
* Dados estruturados;
* Área;
* Quartos;
* Banheiros;
* Garagem;
* IPTU;
* Condomínio;
* Diferenciais;
* Lazer;
* Status;
* Slug amigável SEO.

---

# SEO

Implemente:

* Slugs amigáveis;
* Meta tags dinâmicas;
* OpenGraph;
* Sitemap;
* URLs amigáveis;
* Estrutura preparada para indexação.

---

# FUNCIONALIDADES PRINCIPAIS

# AUTENTICAÇÃO

* Login;
* Registro;
* Recuperação de senha;
* Verificação de e-mail;
* Middleware de permissões.

---

# PERFIL DO CORRETOR

* Avatar;
* Banner;
* Bio;
* CRECI;
* Experiência;
* Redes sociais;
* WhatsApp;
* Site próprio;
* Estatísticas públicas;
* Lista de imóveis.

---

# IMÓVEIS

* CRUD completo;
* Galeria de imagens;
* Favoritos;
* Sistema de busca;
* Filtros avançados;
* Compartilhamento;
* Ordenação por relevância.

---

# FAVORITOS

* Usuário pode salvar imóveis;
* Lista pessoal;
* Remoção rápida.

---

# LEADS

* Registro de interessados;
* Contato via WhatsApp;
* Controle de visualização conforme plano.

---

# DASHBOARD DO CORRETOR

* Total de imóveis;
* Visualizações;
* Favoritos;
* Leads;
* Conversões;
* Estatísticas gráficas.

---

# DASHBOARD ROOT

* Usuários ativos;
* Receita mensal;
* Crescimento;
* Assinaturas;
* Relatórios;
* Controle completo.

---

# MÓDULO DE IA (PLANO BILLING)

Preparar estrutura para:

* Insights automáticos;
* Sugestões de melhorias;
* Recomendações;
* Análise de performance;
* Sugestões de anúncios.

A arquitetura deve ser preparada para futura integração com APIs de IA.

---

# SISTEMA DE VISIBILIDADE

Implementar algoritmo de relevância considerando:

* Plano do corretor;
* Região;
* Engajamento;
* Favoritos;
* Atualização recente;
* Quantidade de visitas.

---

# SISTEMA DE PAGAMENTOS

Estruturar integração preparada para:

* Stripe;
* Mercado Pago;
* Asaas.

Deixar arquitetura desacoplada utilizando:

* PaymentGatewayInterface
* Services específicos por gateway.

---

# BANCO DE DADOS

Utilize UUID em todas as tabelas.

---

# MODELS

## User

Campos:

* id
* name
* email
* password
* document_id
* creci
* birth_date
* address
* phone
* description
* role
* status

---

## Property

Campos:

* id
* user_id
* category_id
* name
* price
* address
* description
* available_for
* property_cover_img_path
* footage
* rooms
* bathrooms
* suites
* parking_spaces
* tax
* slug
* status

---

## PropertyGallery

* property_id
* gallery_img_path
* img_order

---

## Category

* name
* status

---

## PropertyDetails

* property_special_detail
* property_special_detail_slug

---

## LeisurePropertyDetails

* leisure_special_detail
* leisure_special_detail_slug

---

## PropertyCondominium

* price

---

## PropertyCondominiumDetails

* property_condominium_special_detail
* property_condominium_special_detail_slug

---

## PropertyVisibility

* amount

---

## UserProfileVisibility

* amount

---

## Payments

* user_id
* plan
* plan_price
* price_paid
* recurrence
* expires_in
* status

---

# INTERFACE

## Design obrigatório

* Moderna;
* Minimalista;
* Elegante;
* Responsiva;
* UX intuitiva;
* Mobile-first.

## Cores

* Branco predominante;
* Laranja;
* Preto;
* Cinza claro.

---

# REGRAS DE IMPLEMENTAÇÃO

Sempre:

* gerar código limpo;
* comentar apenas o necessário;
* evitar duplicação;
* utilizar tipagem adequada;
* seguir padrões do Laravel;
* criar migrations organizadas;
* criar seeders;
* criar factories;
* utilizar eager loading;
* evitar N+1;
* proteger rotas;
* validar uploads;
* sanitizar entradas.

---

# DOCKER

Crie ambiente completo contendo:

* app
* nginx
* mysql
* phpmyadmin
* redis (opcional)

O projeto deve subir com:
docker compose up -d

---

# ENTREGA ESPERADA

Desenvolva:

1. Estrutura completa do projeto;
2. Models;
3. Migrations;
4. Seeders;
5. Factories;
6. Services;
7. Repositories;
8. Controllers;
9. Policies;
10. Middleware;
11. Requests;
12. Rotas;
13. Views;
14. Dashboards;
15. Sistema de planos;
16. Sistema de pagamentos preparado;
17. Docker completo;
18. Estrutura escalável;
19. Código limpo e profissional.

---

# IMPORTANTE

Sempre priorize:

* escalabilidade;
* organização;
* separação de responsabilidades;
* performance;
* segurança;
* experiência do usuário;
* facilidade de manutenção;
* arquitetura profissional.

Ao gerar código:

* explique rapidamente a finalidade;
* depois gere o código completo;
* nunca gere código incompleto;
* nunca omita dependências;
* mantenha consistência entre arquivos;
* respeite toda a arquitetura definida.
