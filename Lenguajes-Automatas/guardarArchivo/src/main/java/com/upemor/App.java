package com.upemor;

import java.io.File;
import java.io.FileWriter;
import java.nio.file.Files;
import java.util.List;

/**
 * Hello world!
 *
 */
public class App {
  public static void main(String[] args) {
    App app = new App();
    try {
      app.guardar();
    } catch (Exception e) {
      System.out.println(e.toString());
    }
  }

  public void guardar() throws Exception {
    File file = new File("archivo.graph");
    FileWriter fw = new FileWriter(file);

    fw.append("Esta cadena se agrega al archivo\n");
    fw.append("Hola\n");
    fw.append("Adios\n");

    fw.close();
  }

  public void leer() throws Exception {
    File file = new File("archivo.graph");
    List<String> lines = Files.readAllLines(file.toPath());

    for (String line : lines) {
      System.out.println(line);
    }
  }
}
