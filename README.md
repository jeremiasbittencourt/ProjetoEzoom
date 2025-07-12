# Dashboard KPIs - Sistema de Indicadores

Um sistema completo de dashboard de KPIs (Key Performance Indicators) desenvolvido com Laravel no backend e HTML/CSS/JavaScript no frontend.

## 🚀 Funcionalidades

### Backend (Laravel)
- ✅ **API RESTful** com endpoints para listar KPIs
- ✅ **Autenticação** com Laravel Sanctum
- ✅ **Banco de dados** com migrações e seeders
- ✅ **4 KPIs diferentes**: Vendas do Dia, Visitas do Site, Novos Usuários, Pedidos Finalizados
- ✅ **Estrutura completa**: id, titulo, valor, variacao_percentual

### Frontend
- ✅ **Interface responsiva** para desktop, tablet e mobile
- ✅ **Design moderno** com Tailwind CSS 
- ✅ **Navegação fluida** com menu e header
- ✅ **Atualização automática** a cada 30 segundos
- ✅ **Sistema de login/registro** completo
- ✅ **Cards de KPIs** com setas coloridas e formatação monetária
- ✅ **Contadores de resumo** (total, positivos, negativos, neutros)

## 🛠️ Tecnologias Utilizadas

### Backend
- **Laravel 11** - Framework PHP
- **Laravel Sanctum** - Autenticação API
- **MySQL** - Banco de dados
- **Eloquent ORM** - Mapeamento objeto-relacional

### Frontend
- **HTML5** - Estrutura
- **Tailwind CSS** - Estilização
- **JavaScript (ES6+)** - Interatividade
- **Font Awesome** - Ícones
- **Fetch API** - Requisições HTTP

## 📁 Estrutura do Projeto

```
ProjetoEzoom/
├── backend/                 # API Laravel
│   ├── app/
│   │   ├── Http/Controllers/
│   │   │   ├── Api/KpiController.php
│   │   │   └── AuthController.php
│   │   └── Models/
│   │       └── Kpi.php
│   ├── database/
│   │   ├── migrations/
│   │   │   └── create_kpis_table.php
│   │   └── seeders/
│   │       ├── DatabaseSeeder.php
│   │       └── KpiSeeder.php
│   └── routes/
│       └── api.php
└── frontend/               # Interface Web
    ├── index.html          # Página inicial
    ├── login.html          # Tela de login
    ├── register.html       # Tela de registro
    └── dashboard.html      # Dashboard principal
```

## 🚀 Como Executar

### 1. Backend (Laravel)

```bash
cd backend

# Instalar dependências
composer install

# Configurar ambiente
cp .env.example .env
php artisan key:generate

# Configurar banco de dados no .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projeto_ezoom
DB_USERNAME=root
DB_PASSWORD=

# Executar migrações e seeders
php artisan migrate
php artisan db:seed

# Iniciar servidor
php artisan serve
```

### 2. Frontend

```bash
cd frontend

# Abrir no navegador o arquivo index
```

## 🔌 Endpoints da API

### Base URL
```
http://localhost:8000/api
```

### 1. Teste da API
**GET** `/test`
```bash
curl -X GET http://localhost:8000/api/test
```
**Resposta:**
```json
{
  "message": "API funcionando!"
}
```

### 2. Registro de Usuário
**POST** `/register`
```bash
curl -X POST http://localhost:8000/api/register \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Rodrigo Rossa",
    "email": "rodrigo@exemplo.com",
    "password": "123456",
    "password_confirmation": "123456"
  }'
```
**Resposta:**
```json
{
  "message": "Usuário criado com sucesso"
}
```

### 3. Login
**POST** `/login`
```bash
curl -X POST http://localhost:8000/api/login \
  -H "Content-Type: application/json" \
  -d '{
    "email": "rodrigo@exemplo.com",
    "password": "123456"
  }'
```
**Resposta:**
```json
{
  "token": "1|abc123def456...",
  "user": {
    "id": 1,
    "name": "Rodrigo Rossa",
    "email": "rodrigo@exemplo.com"
  }
}
```

### 4. Listar KPIs (Protegido)
**GET** `/kpis`
```bash
curl -X GET http://localhost:8000/api/kpis \
  -H "Authorization: Bearer 1|abc123def456..." \
  -H "Content-Type: application/json"
```
**Resposta:**
```json
[
  {
    "id": 1,
    "titulo": "Vendas do Dia",
    "valor": "1280.50",
    "variacao_percentual": "5.20",
    "created_at": "2024-01-01T00:00:00.000000Z",
    "updated_at": "2024-01-01T00:00:00.000000Z"
  },
  {
    "id": 2,
    "titulo": "Visitas do Site",
    "valor": "3500.00",
    "variacao_percentual": "-3.40",
    "created_at": "2024-01-01T00:00:00.000000Z",
    "updated_at": "2024-01-01T00:00:00.000000Z"
  },
  {
    "id": 3,
    "titulo": "Novos Usuários",
    "valor": "57.00",
    "variacao_percentual": "1.80",
    "created_at": "2024-01-01T00:00:00.000000Z",
    "updated_at": "2024-01-01T00:00:00.000000Z"
  },
  {
    "id": 4,
    "titulo": "Pedidos Finalizados",
    "valor": "132.00",
    "variacao_percentual": "0.00",
    "created_at": "2024-01-01T00:00:00.000000Z",
    "updated_at": "2024-01-01T00:00:00.000000Z"
  }
]
```

## 🔐 Autenticação

### Como obter o token:
1. **Registre um usuário** usando o endpoint `/register`
2. **Faça login** usando o endpoint `/login`
3. **Use o token retornado** no header `Authorization: Bearer {token}`


## 📊 KPIs Disponíveis

O sistema inclui 4 KPIs diferentes:

1. **Vendas do Dia** 
2. **Visitas do Site** 
3. **Novos Usuários** 
4. **Pedidos Finalizados** 

## 🔐 Autenticação

- **Registro**: Criar nova conta com nome, email e senha
- **Login**: Acessar com email e senha
- **Token**: Autenticação via Bearer Token
- **Proteção**: Rotas de KPIs protegidas por autenticação

## 🎨 Interface

### Características Visuais
- **Design moderno** com gradientes e sombras
- **Responsividade completa** para todos os dispositivos
- **Animações suaves** e transições
- **Ícones intuitivos** do Font Awesome
- **Cores semânticas** (verde para positivo, vermelho para negativo)

### Componentes
- **Header** com navegação e informações do usuário
- **Cards de resumo** com contadores
- **Grid de KPIs** com formatação monetária
- **Estados de loading** e erro
- **Menu responsivo** para mobile

## 🔄 Atualização Automática

- **Intervalo**: 30 segundos
- **Indicador visual**: Ponto pulsante verde
- **Contador regressivo**: Mostra segundos até próxima atualização
- **Tratamento de erros**: Mensagens amigáveis
- **Reconexão automática**: Em caso de falha

## 📱 Responsividade

- **Desktop**: Layout em grid 4 colunas
- **Tablet**: Layout em grid 2 colunas
- **Mobile**: Layout em grid 1 coluna
- **Menu mobile**: Navegação adaptada

## 🛡️ Segurança

- **CORS configurado** para permitir requisições do frontend
- **Autenticação via token** (Laravel Sanctum)
- **Validação de dados** no backend
- **Proteção de rotas** com middleware

## 🎯 Requisitos Atendidos

✅ **Backend Laravel** com API RESTful  
✅ **4 KPIs diferentes** com estrutura completa  
✅ **Frontend responsivo** com design moderno  
✅ **Cards com setas coloridas** para variação percentual  
✅ **Atualização automática** a cada 30 segundos  
✅ **Sistema de login** completo  
✅ **Responsividade total** (desktop, tablet, mobile)  

## 🚀 Diferenciais Implementados

- **Interface moderna** com Tailwind CSS
- **Navegação fluida** com menu e header
- **Contadores de resumo** dos KPIs
- **Estados de loading** e tratamento de erros
- **Formatação monetária** inteligente
- **Animações e transições** suaves
- **Design system** consistente
- **UX otimizada** com feedback visual
- **Contador regressivo** para atualizações
- **Documentação completa** dos endpoints

---

**Desenvolvido com ❤️ usando Laravel e Tailwind CSS**
