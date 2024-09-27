package com.upemor;

public class Main {
  public static void main(String[] args) {
    GrafoPonderado grafo = new GrafoPonderado("Grafo");
    Vertice v1 = new Vertice("1");
    Vertice v2 = new Vertice("2");
    Vertice v3 = new Vertice("3");
    Vertice v4 = new Vertice("4");
    Vertice v5 = new Vertice("5");
    Vertice v6 = new Vertice("6");

    grafo.addVertices(v1, v2, v3, v4, v5, v6);

    v1.addAdyacencias(
        new Adyacencia(v2, 4),
        new Adyacencia(v3, 10),
        new Adyacencia(v4, 14));

    v2.addAdyacencias(
        new Adyacencia(v5, 5),
        new Adyacencia(v3, 9),
        new Adyacencia(v1, 4));

    v3.addAdyacencias(
        new Adyacencia(v1, 10),
        new Adyacencia(v2, 9),
        new Adyacencia(v5, 8),
        new Adyacencia(v6, 14),
        new Adyacencia(v4, 2));

    v4.addAdyacencias(
        new Adyacencia(v1, 14),
        new Adyacencia(v3, 2),
        new Adyacencia(v6, 3));

    v5.addAdyacencias(
        new Adyacencia(v2, 5),
        new Adyacencia(v6, 11),
        new Adyacencia(v3, 8));

    v6.addAdyacencias(
        new Adyacencia(v3, 14),
        new Adyacencia(v5, 11),
        new Adyacencia(v4, 3));

    grafo.mostrarListaAdyacencias();
    grafo.recorridoEnAnchura(v4);
    grafo.recorridoEnProfundidad(v4);
  }
}
