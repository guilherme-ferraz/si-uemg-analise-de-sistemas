from flask_sqlalchemy import SQLAlchemy
from datetime import datetime

db = SQLAlchemy()

class Receita(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    titulo = db.Column(db.String(200), nullable=False)
    descricao = db.Column(db.Text, nullable=True)
    valor = db.Column(db.Numeric(10, 2), nullable=False)
    data = db.Column(db.DateTime, default=datetime.utcnow)
    categoria_id = db.Column(db.Integer, db.ForeignKey('categoria.id'), nullable=True)

class Despesa(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    titulo = db.Column(db.String(200), nullable=False)
    descricao = db.Column(db.Text, nullable=True)
    valor = db.Column(db.Numeric(10, 2), nullable=False)
    data = db.Column(db.DateTime, default=datetime.utcnow)
    categoria_id = db.Column(db.Integer, db.ForeignKey('categoria.id'), nullable=True)

class Categoria(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    titulo = db.Column(db.String(100), nullable=False)
    receitas = db.relationship('Receita', backref='categoria', lazy=True)
    despesas = db.relationship('Despesa', backref='categoria', lazy=True)