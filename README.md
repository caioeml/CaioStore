# 🎮 CaioStore — Loja Virtual em PHP

Bem-vindo à **CaioStore**, uma loja virtual completa desenvolvida com **PHP + MySQL**, totalmente responsiva, com **modo claro/escuro**, **sistema de login e registro**, **carrinho**, **páginas de suporte**, e um layout moderno inspirado em grandes e-commerces.

Este projeto foi desenvolvido como portfólio profissional para demonstração de habilidades em frontend e backend.

---

## 🚀 Funcionalidades Principais

### 🔐 Sistema de Autenticação
- Registro de usuário com verificação de senha  
- Login com sessão  
- Logout seguro  
- Saudação dinâmica no menu (Olá, usuário!)  
- Campos validados  

### 🛒 Carrinho de Compras (Frontend estruturado)
- Cards de produtos  
- Quantidade  
- Preços dinâmicos  
- Botão “Finalizar compra”  
- Layout responsivo moderno  

### 🎨 Design Moderno e Responsivo
- Layout inspirado em grandes lojas como Amazon e Mercado Livre  
- Cards de categorias  
- Slides interativos  
- Ofertas do dia  
- Layout limpo e profissional  

### 🌙 Modo Dark/Light
- Toggle de tema com persistência via `localStorage`  
- Todo o site muda automaticamente  
- Ícones animados (🌙 / ☀️)

### 📞 Página de Suporte
- Perguntas frequentes  
- Formulário de contato  
- Cards de ajuda  
- Estrutura profissional  

### 📄 Footer completamente profissional
- Redes sociais  
- Links rápidos  
- Ajuda  
- Direitos autorais  

---

## 🧰 Tecnologias Utilizadas

### **Frontend**
- HTML5  
- CSS3 (responsivo e dark mode)  
- JavaScript (slider + tema + interação)  
- Google Fonts (Poppins)

### **Backend**
- PHP 8  
- Sessões  
- Includes estruturados  
- Conexão com banco MySQL

### **Banco de Dados**
- MySQL (via XAMPP/Workbench)

---

## 📁 Estrutura de Pastas



CaioStore/
│
├── index.php
├── login.php
├── login_action.php
├── registro.php
├── registro_action.php
├── logout.php
├── carrinho.php
├── suporte.php
│
├── conexao.php
├── footer.php
│
├── styles.css
│
└── imagens/
├── Ps5 slide.png
├── Xbox Slide.png
├── Nintendo Slide.png
├── Perifericos.png
├── Steamkey.png
├── ps5-product-thumbnail-01-en-14sep21.webp
├── artboard-1-c-pia-ktg4qatn3j.webp
└── pc-ou-computador-de-jogos-moderno-isolado.avif



---

## ⚙️ Como Rodar no Seu Computador

### **1. Instale o XAMPP**
https://www.apachefriends.org/

### **2. Coloque o projeto na pasta:**



### **3. Inicie Apache + MySQL**

Abra o painel do XAMPP.

### **4. Crie o banco de dados no MySQL**

No phpMyAdmin:

```sql
CREATE DATABASE caio_store;
USE caio_store;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(120) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caio_store";


http://localhost/CaioStore/

🧑‍💻 Autor

Caio Lima
Desenvolvedor Front-end & Back-end iniciante

GitHub: https://github.com/caioeml

Projeto: https://github.com/caioeml/CaioStore

Se gostou do projeto, deixe uma estrela no GitHub!

Isso ajuda muito no portfólio e na visibilidade 👾


---
