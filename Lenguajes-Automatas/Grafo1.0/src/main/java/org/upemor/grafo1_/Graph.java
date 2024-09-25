package org.upemor.grafo1_;

import java.util.ArrayList;
import java.util.List;
import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;
import org.upemor.grafo1_.Vertex;

@Getter
@Setter
@AllArgsConstructor
@NoArgsConstructor
public class Graph {
  private String name;
  private List<Vertex> vertexs;

  public Graph(String name) {
    this.name = name;
    this.vertexs = new ArrayList<>();
  }

  public void add(Vertex v) {
    vertexs.add(v);
  }

  public void addAll(Vertex... vList) {
    for (Vertex v : vList) {
      vertexs.add(v);
    }
  }

  public String toString() {
    return name + " [Grado: " + vertexs.size() + "]";
  }

  public void mostrarGradoVertices() {
    for (Vertex v : vertexs) {
      System.out.println(v + " (Grado: " + v.getEdges().size() + ")");
    }
  }

  public void mostrarAdyacencias() {
    System.out.println("Grafo: " + name);
    for (Vertex vertex : vertexs) {
      System.out.println(vertex + " {");
      for (Vertex v : vertex.getEdges()) {
        System.out.println("   " + v);
      }
      System.out.println("}");
    }
  }
}
