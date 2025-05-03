

### 📄 `README.md` — Encurtador de URL em PHP

```markdown
# 🔗 Encurtador de URL em PHP

Este é um projeto simples e funcional de **encurtador de URLs**, feito em **PHP com PDO** e banco de dados MySQL. Ele permite transformar URLs longas em links curtos personalizados, armazenando os dados em um banco e redirecionando automaticamente o visitante.

---

## 🚀 Funcionalidades

- 🔐 Geração automática de URLs curtas com hash MD5
- 📥 Armazenamento em banco de dados
- 🔁 Redirecionamento automático com base na URL encurtada
- 🌐 Interface web para encurtar URLs
- 💡 Estilo visual futurista com CSS único (neon cyberpunk)



## 🧱 Banco de Dados

Você precisa criar uma tabela chamada `urls` no seu banco de dados. Use o script abaixo:

```sql
CREATE TABLE urls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url TEXT NOT NULL,
    url_short VARCHAR(6) NOT NULL UNIQUE
);
````

---

## ⚙️ Como usar

1. **Clone o projeto**:

   ```bash
   git clone https://github.com/seu-usuario/URLencurt.git
   ```

2. **Configure o banco de dados**:

   * Edite o arquivo `DB.php` com seu `host`, `usuário`, `senha` e `nome do banco`.

3. **Suba o projeto no XAMPP ou outro servidor local**:

   * Certifique-se de que o projeto esteja em `htdocs` ou na raiz do seu servidor.

4. **Acesse no navegador**:

   ```
   http://localhost/URLencurt/public/index.php
   ```

5. **Use a interface para encurtar URLs**:

   * Insira uma URL longa no campo e clique em **"Encurtar"**.
   * O sistema irá gerar uma URL curta como:

     ```
     http://localhost/URLencurt/public/index.php?url_short=abc123
     ```

6. **Redirecionamento automático**:

   * Acesse a URL curta e você será redirecionado automaticamente para o endereço original.

---


## 📌 Possíveis melhorias futuras

* Sistema de login para URLs privadas
* Histórico de URLs encurtadas por usuário
* Estatísticas de cliques
* Personalização da URL curta (ex: `minhaurl.com/nome`)
* API para encurtamento via requisição externa

---

## 🤝 Agradecimentos

Este projeto foi desenvolvido com foco no aprendizado. Agradeço pelo apoio e orientação da comunidade e por todo o conhecimento adquirido ao longo do processo.

---

## 🧠 Autor

* **Nome**: Mario Junior
* **GitHub**: [@Mariojunior2](https://github.com/Mariojunior2)

