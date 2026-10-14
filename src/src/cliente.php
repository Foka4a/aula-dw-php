<?php

class Cliente
{
	private string $nome;
	private string $email;

	public function __construct(string $nome, string $email)
	{
		$this->setNome($nome);
		$this->setEmail($email);
	}

	public function getNome(): string
	{
		return $this->nome;
	}

	public function setNome(string $nome): void
	{
		if (trim($nome) === '') {
			throw new InvalidArgumentException('Nome não pode ser vazio.');
		}

		$this->nome = trim($nome);
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setEmail(string $email): void
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			throw new InvalidArgumentException('E-mail inválido.');
		}

		$this->email = $email;
	}
}

class Conta
{
	private float $saldo;

	public function __construct(float $saldoInicial = 0)
	{
		if ($saldoInicial < 0) {
			throw new InvalidArgumentException('Saldo inicial não pode ser negativo.');
		}

		$this->saldo = $saldoInicial;
	}

	public function getSaldo(): float
	{
		return $this->saldo;
	}

	public function depositar(float $valor): void
	{
		$this->validarValor($valor);
		$this->saldo += $valor;
	}

	public function sacar(float $valor): void
	{
		$this->validarValor($valor);

		if ($valor > $this->saldo) {
			throw new RuntimeException('Saldo insuficiente.');
		}

		$this->saldo -= $valor;
	}

	private function validarValor(float $valor): void
	{
		if ($valor <= 0) {
			throw new InvalidArgumentException('O valor deve ser maior que zero.');
		}
	}
}
