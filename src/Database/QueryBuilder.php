<?php

declare(strict_types=1);

namespace App\Database;

use PDO;

class QueryBuilder
{
    private string $query;

    public function __construct(
        private PDO $pdo
    ) {
    }

    public function select(array $columns = ['*']): static
    {
        $this->query = sprintf('SELECT %s', implode(', ', $columns));

        return $this;
    }

    public function from(string $table): static
    {
        $this->query = sprintf('%s FROM %s', $this->query, $table);

        return $this;
    }

    public function where(string $column, $operator, $value): static
    {
        $this->query = sprintf('%s WHERE %s %s %s', $this->query, $column, $operator, $value);

        return $this;
    }

    public function limit(int $limit): static
    {
        $this->query = sprintf('%s LIMIT %s', $this->query, $limit);

        return $this;
    }

    public function orderBy(string $column, string $direction): static
    {
        $this->query = sprintf('%s ORDER BY %s %s', $this->query, $column, $direction);

        return $this;
    }

    public function get(): array
    {
        $statement = $this->pdo->prepare($this->query);

        $statement->execute();

        if ($result = $statement->fetchAll(PDO::FETCH_CLASS)) {
            return $result;
        }

        return [];
    }

    public function first(): object
    {
        $result = $this->limit(1)->get();
        return reset($result);
    }
}
