from flask import Flask, render_template, request, redirect, url_for
from flask_migrate import Migrate
from config import Config
from models import db, Receita, Despesa, Categoria

app = Flask(__name__)
app.config.from_object(Config)

db.init_app(app)
migrate = Migrate(app, db)

@app.route('/')
def index():
    receitas = Receita.query.all()
    despesas = Despesa.query.all()
    return render_template('index.html', receitas=receitas, despesas=despesas)

@app.route('/categoria', methods=['POST'])
def adicionar_categoria():
    titulo = request.form['titulo']
    nova = Categoria(titulo=titulo)
    db.session.add(nova)
    db.session.commit()
    return redirect(url_for('index'))

@app.route('/receita', methods=['POST'])
def adicionar_receita():
    titulo = request.form['titulo']
    descricao = request.form['descricao']
    valor = float(request.form['valor'])
    nova = Receita(titulo=titulo, descricao=descricao, valor=valor)
    db.session.add(nova)
    db.session.commit()
    return redirect(url_for('index'))

@app.route('/despesa', methods=['POST'])
def adicionar_despesa():
    titulo = request.form['titulo']
    descricao = request.form['descricao']
    valor = float(request.form['valor'])
    nova = Despesa(titulo=titulo, descricao=descricao, valor=valor)
    db.session.add(nova)
    db.session.commit()
    return redirect(url_for('index'))

if __name__ == '__main__':
    app.run(debug=True, port=5000, host='127.0.0.1')
