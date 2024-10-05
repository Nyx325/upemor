package com.upemor;

/**
 * Hello world!
 *
 */
public class App {
  public static void main(String[] args) {
    Graph grafo = new Graph("Grafo 1");
    Vertex v1 = new Vertex("A", 1);
    Vertex v2 = new Vertex("B", 1);
    Vertex v3 = new Vertex("C", 1);
    Vertex v4 = new Vertex("D", 1);
    Vertex v5 = new Vertex("E", 1);

    v1.addAll(v2, v1, v3, v4);
    v2.addAll(v1, v3);

    grafo.addAll(v1, v2, v3, v4, v5);

    grafo.recorridoEnAnchura(v1);
    grafo.recorridoEnProfundidad(v1);
  }
}
