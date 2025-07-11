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
- ✅ **Design moderno** com Tailwind CSS e Font Awesome
- ✅ **Navegação fluida** com menu e header
- ✅ **Atualização automática** a cada 30 segundos
- ✅ **Sistema de login/registro** completo
- ✅ **Cards de KPIs** com setas coloridas e formatação monetária
- ✅ **Contadores de resumo** (total, positivos, negativos, neutros)

## 🛠️ Tecnologias Utilizadas

### Backend
- **Laravel 11** - Framework PHP
- **Laravel Sanctum** - Autenticação API
- **MySQL/SQLite** - Banco de dados
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
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

# Executar migrações e seeders
php artisan migrate
php artisan db:seed

# Iniciar servidor
php artisan serve
```

### 2. Frontend

```bash
cd frontend

# Abrir no navegador (ou usar servidor local)
# http://localhost:8000 (se usando servidor local)
```

## 📊 KPIs Disponíveis

O sistema inclui 4 KPIs diferentes:

1. **Vendas do Dia** - R$ 1.280,50 (+5.2%)
2. **Visitas do Site** - 3.500 (-3.4%)
3. **Novos Usuários** - 57 (+1.8%)
4. **Pedidos Finalizados** - 132 (0.0%)

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

---

**Desenvolvido com ❤️ usando Laravel e Tailwind CSS**
